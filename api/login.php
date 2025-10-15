<?php
require __DIR__ . '/db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    json_response(['error' => 'Method not allowed'], 405);
}

$data = read_json_body();
$email = isset($data['email']) ? strtolower(trim($data['email'])) : '';
$password = isset($data['password']) ? (string)$data['password'] : '';
// Fallback for form-encoded POST or mis-set content types
if ($email === '' && isset($_POST['email'])) {
    $email = strtolower(trim((string)$_POST['email']));
}
if ($password === '' && isset($_POST['password'])) {
    $password = (string)$_POST['password'];
}

if ($email === '' || $password === '') {
    json_response(['error' => 'Missing credentials'], 422);
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    json_response(['error' => 'Invalid email format'], 422);
}

$pdo = get_pdo();
$stmt = $pdo->prepare('SELECT id, username, email, password_hash, first_name, last_name, role FROM users WHERE email = :email LIMIT 1');
$stmt->execute([':email' => $email]);
$user = $stmt->fetch();

if (!$user || !password_verify($password, $user['password_hash'])) {
    json_response(['error' => 'Invalid username/email or password'], 401);
}

// Optional: update last login
$pdo->prepare('UPDATE users SET last_login_at = NOW() WHERE id = ?')->execute([$user['id']]);

unset($user['password_hash']);
json_response(['user' => $user, 'token' => base64_encode(random_bytes(24))]);


