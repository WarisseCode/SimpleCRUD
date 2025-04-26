<?php

declare(strict_types=1);

require_once __DIR__ . '/autoload.php';

use Core\DB;

// Connexion à la base de données
DB::connect('sqlite:' . __DIR__ . '/database.sqlite');

// Exécution de la migration
require_once __DIR__ . '/migrations/2024_04_19_create_users_table.php';

echo "Migration terminée avec succès!\n"; 