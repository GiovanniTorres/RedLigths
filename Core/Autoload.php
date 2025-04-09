<?php

spl_autoload_register(function ($class) {
    // Reemplaza backslashes por slashes y ajusta el path
    $classPath = str_replace('\\', '/', $class);
    $file = __DIR__ . '/../' . $classPath . '.php';

    if (file_exists($file)) {
        require_once $file;
    } else {
        echo "No se pudo cargar la clase: $class";
    }
});
