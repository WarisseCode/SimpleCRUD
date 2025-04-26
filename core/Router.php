<?php

declare(strict_types=1);

namespace Core;

class Router
{
    private array $routes = [];

    public function add(string $method, string $path, callable $handler): void
    {
        $this->routes[] = compact('method', 'path', 'handler');
    }

    public function dispatch(string $method, string $uri)
    {
        foreach ($this->routes as $route) {
            if ($route['method'] === $method && $route['path'] === $uri) {
                return call_user_func($route['handler']);
            }
        }
        http_response_code(404);
        echo "404 Not Found";
    }
} 