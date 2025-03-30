<?php
require_once __DIR__ . '/../core/Autoload.php'; // Cargar el autoloader
require_once __DIR__ . '/../core/Router.php'; // Cargar el enrutador

use Core\Router;

// Crear una instancia del enrutador y manejar la solicitud
$router = new Router();
$router->handleRequest(); // Gestionar la solicitud y cargar la vista correspondiente
