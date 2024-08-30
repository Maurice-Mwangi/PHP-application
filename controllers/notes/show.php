<?php

<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 5218e1c (User authentication and sessions)
use Core\App;
use Core\Database;


$db = App::container()->resolve(Database::class);
$id = $_GET['id'];
$user_id = 1;

<<<<<<< HEAD
=======
use Core\Database;

$id = $_GET['id'];
$user_id = 1;

$config = require base_path('config.php');

$db = new Database($config['database']);

>>>>>>> 619e70801c3d7e1d9e2ddaa49f4ac3a398f43be4
=======

>>>>>>> 5218e1c (User authentication and sessions)
$post = $db->query("Select * FROM notes WHERE id = :id", 
[
    'id' => $id,
])->findOrFail();

if(!$post){
    abort();
}

authorize($post['user_id'] === $user_id);

view('notes/show.view.php', [
    'heading' => "Show Notes",
    'post' => $post
]);


