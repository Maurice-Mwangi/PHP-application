<?php

use Core\Database;

$id = $_GET['id'];
$user_id = 1;

$config = require base_path('config.php');

$db = new Database($config['database']);

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


