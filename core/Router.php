<?php

namespace core;

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 7fd695c (Sessions and Log out)
use Core\Middleware\Middleware;



<<<<<<< HEAD
>>>>>>> 5218e1c (User authentication and sessions)
=======
>>>>>>> 7fd695c (Sessions and Log out)
class Router {

    protected $routes = [];

    public function add($method, $uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
<<<<<<< HEAD
<<<<<<< HEAD
            'method' => $method
        ];

=======
=======
>>>>>>> 7fd695c (Sessions and Log out)
            'method' => $method,
            'middleware' => null
        ];

        return $this;

<<<<<<< HEAD
>>>>>>> 5218e1c (User authentication and sessions)
=======
>>>>>>> 7fd695c (Sessions and Log out)
    }

    public function get($uri, $controller)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $this->add('GET', $uri, $controller);
=======
        return $this->add('GET', $uri, $controller);
>>>>>>> 5218e1c (User authentication and sessions)
=======
        return $this->add('GET', $uri, $controller);
>>>>>>> 7fd695c (Sessions and Log out)
    }

    public function post($uri, $controller)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $this->add('POST', $uri, $controller);
=======
        return $this->add('POST', $uri, $controller);
>>>>>>> 5218e1c (User authentication and sessions)
=======
        return $this->add('POST', $uri, $controller);
>>>>>>> 7fd695c (Sessions and Log out)
    }

    public function delete($uri, $controller)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $this->add('DELETE', $uri, $controller);
=======
        return $this->add('DELETE', $uri, $controller);
>>>>>>> 5218e1c (User authentication and sessions)
=======
        return $this->add('DELETE', $uri, $controller);
>>>>>>> 7fd695c (Sessions and Log out)
    }

    public function put($uri, $controller)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $this->add('PUT', $uri, $controller);
=======
        return $this->add('PUT', $uri, $controller);
>>>>>>> 5218e1c (User authentication and sessions)
=======
        return $this->add('PUT', $uri, $controller);
>>>>>>> 7fd695c (Sessions and Log out)
    }

    public function patch($uri, $controller)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $this->add('PATCH', $uri, $controller);
=======
=======
>>>>>>> 7fd695c (Sessions and Log out)
        return $this->add('PATCH', $uri, $controller);
    }

    public function only($key)
    {
        $this->routes[array_key_last($this->routes)]['middleware'] = $key;
        return $this;
<<<<<<< HEAD
>>>>>>> 5218e1c (User authentication and sessions)
=======
>>>>>>> 7fd695c (Sessions and Log out)
    }

    public function route($uri, $method){
        foreach($this->routes as $route){
            if($route['uri'] === $uri && $route['method'] === strtoupper($method)){
<<<<<<< HEAD
<<<<<<< HEAD
                return require base_path($route['controller']);
=======

                Middleware::resolve($route['middleware']);
                
                return require base_path($route['controller']);
                
>>>>>>> 5218e1c (User authentication and sessions)
=======

                Middleware::resolve($route['middleware']);
                
                return require base_path('Http/controllers/' . $route['controller']);
                
>>>>>>> 7fd695c (Sessions and Log out)
            }
        }

        $this->abort();
    }

    protected function abort($code = 404){
        http_response_code($code);
        require base_path("views/{$code}.view.php");
        die;
    }
}


// $routes = require base_path('routes.php');

// $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// function abort($code = 404){
//     http_response_code($code);
//     require base_path("views/{$code}.view.php");
//     die;
// }

// function routeToController($uri, $routes){
//     if(array_key_exists($uri, $routes))
//         require base_path($routes[$uri]);
//     else
//         abort(404);
// }

// routeToController($uri, $routes);