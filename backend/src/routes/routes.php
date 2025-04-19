<?php

class Router {
    private $routes = [];
    private $basePath = '';

    public function __construct($basePath = '') {
        $this->basePath = $basePath;
    }

    public function addRoute($method, $path, $handler) {
        $this->routes[] = [
            'method' => strtoupper($method),
            'path' => $this->basePath . $path,
            'handler' => $handler
        ];
    }

    public function get($path, $handler) {
        $this->addRoute('GET', $path, $handler);
    }

    public function post($path, $handler) {
        $this->addRoute('POST', $path, $handler);
    }

    public function put($path, $handler) {
        $this->addRoute('PUT', $path, $handler);
    }

    public function delete($path, $handler) {
        $this->addRoute('DELETE', $path, $handler);
    }

    public function dispatch() {
        $requestMethod = $_SERVER['REQUEST_METHOD'];
        $requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        foreach ($this->routes as $route) {
            if ($route['method'] === $requestMethod && $route['path'] === $requestUri) {
                return call_user_func($route['handler']);
            }
        }

        // Si no se encuentra la ruta
        http_response_code(404);
        echo json_encode(['error' => 'Ruta no encontrada']);
    }
}

// Crear instancia del router
$router = new Router('/api');

// Rutas de ejemplo
$router->get('/productos', function() {
    return json_encode(['mensaje' => 'Lista de productos']);
});

$router->post('/productos', function() {
    return json_encode(['mensaje' => 'Producto creado']);
});

$router->get('/productos/{id}', function() {
    return json_encode(['mensaje' => 'Detalles del producto']);
});

// Ejecutar el router
$router->dispatch();
