<?php

// Définir  ma root racine du projet
define ('ROOT', dirname(__DIR__));
// Inclure mon autoloader
require_once ROOT.'/App/Autoloader.php';
// spl_register dans mon Autoloader.php()
App\Autoloader::spl_register();


$page = 'home';

if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

if (isset($_GET['action'])) {
    $action = $_GET['action'];
}


$nameController = 'App\Controller\\'.ucfirst($page).'Controller';

$controller = new $nameController;

$controller->$action();