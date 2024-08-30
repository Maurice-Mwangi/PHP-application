<?php

<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 5218e1c (User authentication and sessions)
use Core\App;
use Core\Database;
use Core\Validator;


$db = App::container()->resolve(Database::class);

<<<<<<< HEAD

// $config = require base_path('config.php');
// require base_path('core/Validator.php');
// $db = new Database($config['database']);
=======
use Core\Validator;

use Core\Database;


$config = require base_path('config.php');
require base_path('core/Validator.php');
$db = new Database($config['database']);
>>>>>>> 619e70801c3d7e1d9e2ddaa49f4ac3a398f43be4


=======
>>>>>>> 5218e1c (User authentication and sessions)
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