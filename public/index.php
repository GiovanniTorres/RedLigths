<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/../Core/Autoload.php'; // Cargar el autoloader
require_once __DIR__ . '/../Core/Router.php'; // Cargar el enrutador

use Core\Router;

// Crear una instancia del enrutador y manejar la solicitud
$router = new Router();
$router->handleRequest(); // Gestionar la solicitud y cargar la vista correspondiente
