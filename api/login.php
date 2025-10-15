<?php
require __DIR__ . '/db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    json_response(['error' => 'Method not allowed'], 405);
}

$data = read_json_body();
$identifier = isset($data['username']) ? trim($data['username']) : (isset($data['email']) ? trim($data['email']) : '');
$password = isset($data['password']) ? (string)$data['password'] : '';

if ($identifier === '' || $password === '') {
    json_response(['error' => 'Missing credentials'], 422);
}

$pdo = get_pdo();
$stmt = $pdo->prepare('SELECT id, username, email, password_hash, first_name, last_name, role FROM users WHERE username = :id OR email = :id LIMIT 1');
$stmt->execute([':id' => $identifier]);
$user = $stmt->fetch();

if (!$user || !password_verify($password, $user['password_hash'])) {
    json_response(['error' => 'Invalid username/email or password'], 401);
}

// Optional: update last login
$pdo->prepare('UPDATE users SET last_login_at = NOW() WHERE id = ?')->execute([$user['id']]);

unset($user['password_hash']);
json_response(['user' => $user, 'token' => base64_encode(random_bytes(24))]);


