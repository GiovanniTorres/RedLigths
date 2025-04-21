<?php
$dbFile = __DIR__ . '/../Core/local.db'; // Base de datos en Core
$schemaFile = __DIR__ . '/schema.sql';   // schema en config

try {
    // Crear nueva base de datos
    $pdo = new PDO('sqlite:' . $dbFile);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Cargar y ejecutar el schema
    $schema = file_get_contents($schemaFile);
    $pdo->exec("PRAGMA foreign_keys = ON;");
    $pdo->exec($schema);

    // Insertar usuario de prueba
    $stmt = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
    $stmt->execute(['Jhovany Torres', 'jhovany@example.com', '123456']);

    echo "Base de datos inicializada correctamente con usuario de prueba.";

} catch (PDOException $e) {
    echo "Error al inicializar la base de datos: " . $e->getMessage();
}
