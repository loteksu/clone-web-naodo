<?php
require('./Model/database.php');
require './Controller/Controller.php';
$controllerName = ucfirst((strtolower($_REQUEST['controller'])) . 'Controller');
if ($controllerName == 'Controller') {
    $controllerName = 'HomeController';
}
$actionName = $_REQUEST['action'] ?? 'index';
require "./Controller/${controllerName}.php";
$controllerO = new $controllerName;
$controllerO->index();