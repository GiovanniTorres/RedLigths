<?php
require_once __DIR__ . '/../Core/Autoload.php';
require_once __DIR__ . '/../Core/Router.php';

use Core\Router;

$router = new Router();
$router->handleRequest();
