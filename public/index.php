<?php
error_reporting(E_ALL); //Útiles en desarrollo 
ini_set('display_errors', 1); // Útiles en desarrollo 

// Autocargar clases automáticamente
spl_autoload_register(function ($class) {
    $file = __DIR__ . '/../' . str_replace('\\', '/', $class) . '.php';
    
    if (file_exists($file)) {
        require_once $file;
    } else {
        die("Error: No se pudo cargar la clase $class (Archivo esperado: $file)");
    }
});