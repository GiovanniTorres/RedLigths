<?php
require_once __DIR__ . '/../config/database.php';

$db = new Database();
$conn = $db->getConnection();

$stmt = $conn->query("SELECT * FROM users");
$users = $stmt->fetchAll();

foreach ($users as $user) {
    echo "ID: {$user['id']} - Nombre: {$user['name']} - Email: {$user['email']}<br>";
    }