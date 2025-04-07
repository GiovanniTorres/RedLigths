<?php
$host = 'aws.connect.psdb.cloud';
$db   = 'redlights';
$user = '2mb1lpo9cqmpn4f45btd';
$pass = 'pscale_pw_RLplrD0fHKF3l5lR5dCn4Yepqwdwkj86VZdqWTIc0fF';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
    exit;
}
