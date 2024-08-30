<?php

use Core\App;
use Core\Database;


$db = App::container()->resolve(Database::class);

$id = 1;

$posts = $db->query("Select * FROM notes WHERE user_id = :id", ['id' => $id])->get();

view('notes/index.view.php', [
    'heading' => "Show Notes",
    'posts' => $posts
]);