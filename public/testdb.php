<?php
require_once '../config/database.php';

$db = new Database();
$conn = $db->getConnection();

if ($conn) {
    echo "¡Conexión exitosa a PlanetScale con PDO!";
}
