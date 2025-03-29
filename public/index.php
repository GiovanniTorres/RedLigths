<?php
spl_autoload_register(function ($class) {
    $file = __DIR__ . '/../' . str_replace('\\', '/', $class) . '.php';
    
    echo $file; // Imprime la ruta generada
    // o
    var_dump($file); // Muestra información detallada sobre la variable
});