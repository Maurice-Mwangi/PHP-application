<?php 

use Core\App;
use Core\Database;
use Core\Validator;


$db = App::container()->resolve(Database::class);

$user_id = 1;

$post = $db->query("Select * FROM notes WHERE id = :id", 
[
    'id' => $_POST['id'],
])->findOrFail();

if(!$post){
    abort();
}

authorize($post['user_id'] === $user_id);

if(!Validator::string($_POST['body'], 10, 100)){
    $errors['body'] = "A description of 10 - 100 characters requeired";
}


if($errors){
    return view('notes/edit.view.php', [
        'errors' => $errors,
        'heading' => "Edit a note",
        'post' => $post
    ]);
}

$db->query("UPDATE notes SET body = :body WHERE id = :id", 
[
    'body' => $_POST['body'],
    'id' => $_POST['id'],
]);

header("Location: /notes");
exit();
