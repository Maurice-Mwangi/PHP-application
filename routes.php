<?php

$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');
$router->get('/contact', 'controllers/contact.php');

$router->get('/notes', 'controllers/notes/index.php');
$router->post('/notes', 'controllers/notes/store.php');

//note routes
$router->get('/note', 'controllers/notes/show.php');
$router->delete('/note', 'controllers/notes/destroy.php');

<<<<<<< HEAD
$router->get('/note/edit', 'controllers/notes/edit.php');
$router->patch('/note', 'controllers/notes/update.php');

$router->get('/note/create', 'controllers/notes/create.php');


=======
$router->get('/note/create', 'controllers/notes/create.php');





>>>>>>> 619e70801c3d7e1d9e2ddaa49f4ac3a398f43be4
// return [
//     '/' => 'controllers/index.php',
//     '/about' => 'controllers/about.php',
//     '/contact' => 'controllers/contact.php',
//     '/notes' => 'controllers/notes/index.php',
//     '/note' => 'controllers/notes/show.php',
//     '/note/create' => 'controllers/notes/create.php'
// ];
