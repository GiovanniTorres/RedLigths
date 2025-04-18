<?php
$dbFile = __DIR__ . '/../Core/local.db'; // base de datos en Core
$schemaFile = __DIR__ . '/schema.sql';   // schema está en config

try {
    $pdo = new PDO('sqlite:' . $dbFile);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $schema = file_get_contents($schemaFile);
    $pdo->exec("PRAGMA foreign_keys = ON;");
    $pdo->exec($schema);

    echo "Base de datos inicializada correctamente.";
} catch (PDOException $e) {
    echo "Error al inicializar la base de datos: " . $e->getMessage();
}
