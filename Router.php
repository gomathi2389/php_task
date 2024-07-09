<?php
class Router {
    private $routes = [];
    private $basePath;

    public function __construct($basePath = '') {
        $this->basePath = $basePath;
    }

    public function add($method, $path, $handler) {
        $this->routes[] = compact('method', 'path', 'handler');
    }

    public function dispatch($requestMethod, $requestUri) {
        $requestUri = str_replace($this->basePath, '', $requestUri);

        foreach ($this->routes as $route) {
            $pathRegex = $this->convertToRegex($route['path']);
            if ($requestMethod === $route['method'] && preg_match($pathRegex, $requestUri, $matches)) {
                array_shift($matches); 
                return call_user_func_array($route['handler'], $matches);
            }
        }
        http_response_code(404);
        echo '404 Not Found';
    }

    private function convertToRegex($path) {
        return '/^' . str_replace('/', '\/', preg_replace('/\{[a-zA-Z0-9_]+\}/', '([a-zA-Z0-9_]+)', $path)) . '$/';
    }
}