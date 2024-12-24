<?php

session_start();

include "View/header.php";
include "Controller/root.php";
include "View/footer.php";


require_once '../Controller/class.php';

/*
require_once 'Router.php';
require_once 'controllers/HomeController.php';
require_once 'models/HomeModel.php';
*/

$router = new Router();

$router->addRoute('/', function() {
    $controller = new controller();
    $controller->index();
});

$router->handleRequest($_SERVER['REQUEST_URI']);
