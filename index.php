<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'Router.php';
require './Controllers/HomeController.php';
require './Controllers/UserController.php';

$basePath = '/task1';
$router = new Router($basePath);

$router->add('GET', '/', [new HomeController(), 'index']);
$router->add('GET', '/about', [new HomeController(), 'about']);
$router->add('GET', '/user/{id}', function($id) {
    (new UserController())->show($id);
});

$router->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));