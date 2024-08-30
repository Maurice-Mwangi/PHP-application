<?php

use Core\App;
use Core\Database;


$db = App::container()->resolve(Database::class);


$id = $_GET['id'];
$user_id = 1;

$post = $db->query("Select * FROM notes WHERE id = :id", 
[
    'id' => $id,
])->findOrFail();

if(!$post){
    abort();
}

authorize($post['user_id'] === $user_id);

$errors = [];

view('notes/edit.view.php', [
    'heading' => "Edit a note",
    'errors' => $errors,
    'post' => $post
]);