<?php

// Définir le namespace
namespace App;


class Autoloader {
    static function spl_register() {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    static function autoload($class) {
        if (strpos($class, __NAMESPACE__ . '\\') === 0) {
            $class = str_replace(__NAMESPACE__ . '\\', '', $class);
            $class = str_replace('\\', '/', $class);
            
            // var_dump(__DIR__ . '/' . $class . '.php');
            require __DIR__ . '/' . $class . '.php';
        }
    }
}