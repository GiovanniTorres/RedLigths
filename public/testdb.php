<?php
require_once '../config/database.php';

$db = new Database();
$conn = $db->conn;

if ($conn) {
    echo "¡Conexión exitosa!";
    }
