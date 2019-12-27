<?php
require_once '../vendor/autoload.php';
include_once '../App/config/routes.php';

use App\Router;

$route = $_GET['route'];
$controllerName = 'App\Controller\\' . $routes[$route]['controller']['name'];
$method = $_GET['method'];

$controller = new $controllerName();
$page = $controller->$method();

include_once '../templates/layout.html.php';
