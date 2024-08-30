<?php

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . "core/".'functions.php';

spl_autoload_register(function ($class){
    $class = str_replace('\\', DIRECTORY_SEPARATOR , $class);
    require base_path("{$class}.php");
});

<<<<<<< HEAD
require(base_path('bootstrap.php'));

=======
>>>>>>> 619e70801c3d7e1d9e2ddaa49f4ac3a398f43be4
$router = new \Core\Router;

$routes = require base_path('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = isset($_POST['_method']) ? $_POST['_method'] : $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);

