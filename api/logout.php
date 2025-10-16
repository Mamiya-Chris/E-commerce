<?php
if (session_status() === PHP_SESSION_NONE) { session_start(); }


$_SESSION = [];

if (ini_get('session.use_cookies')) {
  $params = session_get_cookie_params();
  setcookie(session_name(), '', time() - 42000, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
}


@session_destroy();

?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signing out…</title>
  <meta http-equiv="refresh" content="3;url=../index.php">
</head>
<body>
  <script>
    try { localStorage.removeItem('nethshop_session'); } catch (e) {}
    try { window.location.replace('../index.php'); } catch (e) { window.location.href = '../index.php'; }
  </script>
  <noscript>
    <p>You have been signed out. <a href="../index.php">Continue</a></p>
  </noscript>
</body>
</html>


