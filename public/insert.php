<?php
require_once __DIR__ . '/../config/database.php';

$db = new Database();
$conn = $db->getConnection();

$stmt = $conn->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
$stmt->execute(['Jhovany', 'jhovany@example.com']);

echo "Usuario insertado correctamente.";