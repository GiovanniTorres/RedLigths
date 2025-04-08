<?php
spl_autoload_register(function ($class) {
    print $file = __DIR__ . '/../' . str_replace('\\', '/', $class) . '.php';
    // Si no se encuentra, intenta en app/controller/
    if (!file_exists($file)) {
        $file = __DIR__ . '/../app/controller/' . basename(str_replace('\\', '/', $class)) . '.php';
    }

    if (file_exists($file)) {
        require_once $file;
    } else {
        echo "Error: No se pudo cargar la clase $class.";
    }
});
