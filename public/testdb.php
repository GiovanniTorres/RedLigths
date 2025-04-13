<?php
require_once __DIR__ . '/../config/database.php';

$db = new Database(); // usa SQLite por default
$conn = $db->getConnection();

if ($conn) {
    echo "¡Conexión exitosa con SQLite!";
}
