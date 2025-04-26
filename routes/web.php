<?php

use Core\Router;
use App\Controllers\UserController;

$router = new Router();

$router->add('GET', '/users', [new UserController(), 'index']);
$router->add('POST', '/users', [new UserController(), 'store']);

return $router; 