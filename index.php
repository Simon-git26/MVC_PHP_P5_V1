<?php

// Affichage All de mes erreurs
ini_set('display_error', 'On');
error_reporting(E_ALL);


// Définir  ma root racine du projet
define ('ROOT', dirname(__DIR__.'/MVC_PHP_P5_V1'));

// echo ROOT;

// Inclure mon autoloader
Require_once ROOT.'/App/Autoloader.php';
// spl_register dans mon Autoloader.php()
App\Autoloader::spl_register();


$page = 'home';
$action = 'show';

if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

if (isset($_GET['action'])) {
    $action = $_GET['action'];
}


$nameController = 'App\Controller\\'.ucfirst($page).'Controller';

if (!class_exists($nameController) || !method_exists($nameController, $action)) {
    header('Location: http://localhost/MVC_PHP_P5_V1/public/');
}

$controller = new $nameController;

$controller->$action();