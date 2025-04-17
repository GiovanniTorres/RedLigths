<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once __DIR__ . '/../Core/config.php'; // o usa la conexión directa si prefieres

try {
    $pdo = new PDO('sqlite:' . __DIR__ . '/../Core/local.db');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query('SELECT * FROM users');
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($users) === 0) {
        echo "La tabla 'users' está vacía.";
    } else {
        echo "<h2>Usuarios encontrados:</h2><ul>";
        foreach ($users as $user) {
            echo "<li>" . htmlspecialchars($user['name']) . " - " . htmlspecialchars($user['email']) . "</li>";
        }
        echo "</ul>";
    }
} catch (PDOException $e) {
    echo "Error al consultar la base de datos: " . $e->getMessage();
}
