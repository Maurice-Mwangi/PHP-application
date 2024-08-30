<?php

use core\Router;

function dump_die($value){
    echo"<pre>";
    var_dump($value);
    echo"<pre>";
    die;
}

function isURL($url){
    if($_SERVER['REQUEST_URI'] === $url)
        echo 'bg-gray-900 text-white';
    else
        echo 'text-gray-300';
}


function authorize($condition, $status = Core\Response::FORBIDDEN){
    if(!$condition){
        abort($status);
    }  
        
}

function abort($code = Core\Response::FORBIDDEN){
    http_response_code($code);
    require base_path("views/{$code}.view.php");
    die;
}


function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);
    require base_path('views/' . $path);
}