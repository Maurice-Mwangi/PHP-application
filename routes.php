<?php

<<<<<<< HEAD
$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');
$router->get('/contact', 'controllers/contact.php');

<<<<<<< HEAD
$router->get('/notes', 'controllers/notes/index.php');
=======
$router->get('/notes', 'controllers/notes/index.php')->only('auth');
>>>>>>> 5218e1c (User authentication and sessions)
$router->post('/notes', 'controllers/notes/store.php');

//note routes
$router->get('/note', 'controllers/notes/show.php');
$router->delete('/note', 'controllers/notes/destroy.php');
<<<<<<< HEAD

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
=======
$router->get('/note/edit', 'controllers/notes/edit.php');
$router->patch('/note', 'controllers/notes/update.php');
$router->get('/note/create', 'controllers/notes/create.php');


//regitration routes
$router->get('/register', 'controllers/registration/create.php')->only('guest');
$router->post('/register', 'controllers/registration/store.php');


>>>>>>> 5218e1c (User authentication and sessions)
=======
$router->get('/', 'index.php');
$router->get('/about', 'about.php');
$router->get('/contact', 'contact.php');

$router->get('/notes', 'notes/index.php')->only('auth');
$router->post('/notes', 'notes/store.php');

//note routes
$router->get('/note', 'notes/show.php');
$router->delete('/note', 'notes/destroy.php');
$router->get('/note/edit', 'notes/edit.php');
$router->patch('/note', 'notes/update.php');
$router->get('/note/create', 'notes/create.php');


//regitration routes
$router->get('/register', 'registration/create.php')->only('guest');
$router->post('/register', 'registration/store.php');


$router->get('/login', 'sessions/create.php')->only('guest');
$router->post('/login', 'sessions/store.php')->only('guest');
$router->delete('/login', 'sessions/destroy.php')->only('auth');


>>>>>>> 7fd695c (Sessions and Log out)
