<?php

declare(strict_types=1);

require_once __DIR__ . '/../autoload.php';

use Core\DB;

// Charger la configuration de la base de données
$config = require_once __DIR__ . '/../config/database.php';
$connection = $config['connections'][$config['default']];

// Connexion à la base de données
if ($connection['driver'] === 'sqlite') {
    DB::connect('sqlite:' . $connection['database']);
} else {
    DB::connect(
        "{$connection['driver']}:host={$connection['host']};dbname={$connection['database']};charset={$connection['charset']}",
        $connection['username'],
        $connection['password']
    );
}

$router = require_once __DIR__ . '/../routes/web.php';
$router->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']); 