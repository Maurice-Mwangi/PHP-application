<?php

<<<<<<< HEAD
use Core\App;
use Core\Database;


$db = App::container()->resolve(Database::class);

$id = 1;

=======
use Core\Database;

$id = 1;

$config = require base_path('config.php');
$db = new Database($config['database']);
>>>>>>> 619e70801c3d7e1d9e2ddaa49f4ac3a398f43be4
$posts = $db->query("Select * FROM notes WHERE user_id = :id", ['id' => $id])->get();

view('notes/index.view.php', [
    'heading' => "Show Notes",
    'posts' => $posts
]);