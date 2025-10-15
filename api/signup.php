<?php
require __DIR__ . '/db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    json_response(['error' => 'Method not allowed'], 405);
}

$data = read_json_body();

$first = trim((string)($data['firstName'] ?? ''));
$last = trim((string)($data['lastName'] ?? ''));
$address = trim((string)($data['address'] ?? ''));
$email = trim((string)($data['email'] ?? ''));
$contact = trim((string)($data['contact'] ?? ''));
$password = (string)($data['password'] ?? '');

// Derive a username if none is provided (optional)
$username = trim((string)($data['username'] ?? ''));
if ($username === '' && $email !== '') {
    $base = strstr($email, '@', true) ?: 'user';
    $username = preg_replace('/[^a-z0-9_\-]/i', '', $base);
}

if ($first === '' || $last === '' || $email === '' || $password === '') {
    json_response(['error' => 'Missing required fields'], 422);
}

$pdo = get_pdo();

// Uniqueness checks
$exists = $pdo->prepare('SELECT 1 FROM users WHERE email = :email OR username = :username LIMIT 1');
$exists->execute([':email' => $email, ':username' => $username]);
if ($exists->fetch()) {
    json_response(['error' => 'Username or email already exists'], 409);
}

$stmt = $pdo->prepare('INSERT INTO users (username, email, password_hash, first_name, last_name, contact, address, role)
VALUES (:u, :e, :p, :f, :l, :c, :a, :r)');
$stmt->execute([
    ':u' => $username,
    ':e' => $email,
    ':p' => password_hash($password, PASSWORD_DEFAULT),
    ':f' => $first,
    ':l' => $last,
    ':c' => $contact,
    ':a' => $address,
    ':r' => 'customer',
]);

$userId = $pdo->lastInsertId();

json_response(['id' => (int)$userId, 'username' => $username, 'email' => $email]);


