<?php
require_once __DIR__ . '/../Core/Database.php';

use Core\Database;

try {
    $db = new Database();
    $pdo = $db->getConnection();

    // Consultar si existe la tabla users
    $stmt = $pdo->query("SELECT name FROM sqlite_master WHERE type='table' AND name='users'");
    $result = $stmt->fetch();

    if ($result) {
        echo "Conexión exitosa. La tabla 'users' existe.";
    } else {
        echo "Conexión exitosa, pero la tabla 'users' NO existe.";
    }
} catch (PDOException $e) {
    echo "Error al consultar la base de datos: " . $e->getMessage();
}

