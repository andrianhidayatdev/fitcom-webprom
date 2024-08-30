<?php

class Router
{
  private static array $routes = [];

  static function add(string $method, string $path, string $controller, string $function, array $middleware = [])
  {
    self::$routes[] = [
      'method' => $method,
      'path' => $path,
      'controller' => $controller,
      'function' => $function,
      'middleware' => $middleware
    ];
  }

  static function run()
  {
    $path = '/';
    // CHECK LOCATION 
    if (isset($_SERVER['PATH_INFO'])) {
      $path = $_SERVER['PATH_INFO'];
    }
    // REQ METHOD
    $method = $_SERVER['REQUEST_METHOD'];

    // CHECK LOOP ROUTE
    foreach (self::$routes as $route) {
      $pattern = "#^" . $route['path'] . "$#";
      if (preg_match($pattern, $path, $variable) && $method == $route['method']) {

        // CALL MIDDLEWARE
        foreach ($route['middleware'] as $middleware) {
          $instance = new $middleware;
          $instance->before();
        }

        $function =  $route['function'];
        $controller = new $route['controller'];

        array_shift($variable);
        call_user_func_array([$controller, $function], $variable);
      }
    }
  }
}
