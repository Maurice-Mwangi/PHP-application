<?php

use Core\Database;

$id = 1;

$config = require base_path('config.php');
$db = new Database($config['database']);
$posts = $db->query("Select * FROM notes WHERE user_id = :id", ['id' => $id])->get();

view('notes/index.view.php', [
    'heading' => "Show Notes",
    'posts' => $posts
]);