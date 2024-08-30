<?php

use Core\Validator;

use Core\Database;


$config = require base_path('config.php');
require base_path('core/Validator.php');
$db = new Database($config['database']);


$errors = [];


if(!Validator::string($_POST['body'], 10, 100)){
    $errors['body'] = "A description of 10 - 100 characters requeired";
}


if(!empty($errors)){
    return view('notes/create.view.php', [
        'heading' => "Create a note",
        'errors' => $errors
    ]);
}


$db->query("INSERT INTO notes (body, user_id) VALUES(:body, :user_id)", [
    ':body' => $_POST['body'],
    ':user_id' => 1
]);

header('Location: /notes');
die();