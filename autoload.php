<?php

spl_autoload_register(function ($class) {
    // Convertir les namespaces en chemins de fichiers
    $prefix = '';
    $base_dir = __DIR__ . '/';

    // Remplacer les backslashes par des forward slashes
    $file = $base_dir . str_replace('\\', '/', $class) . '.php';

    // Si le fichier existe, le charger
    if (file_exists($file)) {
        require $file;
        return true;
    }
    
    return false;
}); 