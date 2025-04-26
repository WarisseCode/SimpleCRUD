<?php

// Démarrer le serveur de développement PHP
$host = 'localhost';
$port = 8000;
$root = __DIR__ . '/public';

echo "Démarrage du serveur de développement sur http://{$host}:{$port}\n";
echo "Appuyez sur Ctrl+C pour arrêter le serveur.\n";

// Exécuter la commande pour démarrer le serveur PHP
$command = sprintf('php -S %s:%d -t %s', $host, $port, $root);
system($command); 