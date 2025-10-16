<?php
// Simple PDO connection helper for the 'eshop' database
// Adjust credentials if you changed XAMPP defaults

$DB_HOST = '127.0.0.1';
$DB_PORT = '3306';
$DB_NAME = 'eshop';
$DB_USER = 'root';
$DB_PASS = 'jeanmitzi';

function get_pdo(){
    static $pdo = null;
    if ($pdo !== null) return $pdo;
    global $DB_HOST, $DB_PORT, $DB_NAME, $DB_USER, $DB_PASS;
    $dsn = 'mysql:host=' . $DB_HOST . ';port=' . $DB_PORT . ';dbname=' . $DB_NAME . ';charset=utf8mb4';
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];
    $pdo = new PDO($dsn, $DB_USER, $DB_PASS, $options);
    return $pdo;
}

function json_response($data, $status = 200){
    http_response_code($status);
    header('Content-Type: application/json');
    echo json_encode($data);
    exit;
}

function read_json_body(){
    $raw = file_get_contents('php://input');
    $json = json_decode($raw, true);
    return is_array($json) ? $json : [];
}


