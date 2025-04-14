<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../models/UserModel.php';
require_once __DIR__ . '/../models/ProjectModel.php';

$db = new Database();
$conn = $db->getConnection();

$userModel = new UserModel($conn);
$projectModel = new ProjectModel($conn);

// Crear usuario y proyecto de prueba
$userModel->create("Jhovany");
$users = $userModel->getAll();

if ($users) {
    $userId = $users[0]['id'];
        $projectModel->create($userId, "Proyecto RedLights");
            echo "Usuario y proyecto creados exitosamente.";
            } else {
                echo "No se pudo crear usuario.";
                }