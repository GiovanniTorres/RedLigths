<?php
// config/database.php

$host = 'aws.connect.psdb.cloud';
$db   = 'redlights';
$user = '2mb1lpo9cqmpn4f45btd';
$pass = 'pscale_pw_RLplrD0fHKF3l5lR5dCn4Yepqwdwkj86VZdqWTIc0fF';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
