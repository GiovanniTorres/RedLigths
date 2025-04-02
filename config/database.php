<?php

$host = "db"; // Nombre del servicio en docker-compose
$dbname = "redlights"; // Nombre de la base de datos
$username = "user";
$password = "password";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa!";
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}

?>

