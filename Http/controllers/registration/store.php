<?php

use Core\App;
use Core\Validator;
use Core\Database;

$email = $_POST['email'];
$password = $_POST['password'];
$errors = [];

if(!Validator::email($email)) {
    $errors['email'] = "Provide a valid email address";
}

if(!Validator::string($password, 6, 20)){
    $errors['password'] = "Password need be 7 - 20 characters";
}

if(!empty($errors))
{
    return view('registration/create.view.php', [
        'heading' => 'Register Account',
        'errors' => $errors
    ]);
}


$db = App::resolve(Database::class);

$result = $db->query("SELECT * FROM users WHERE email = :email", [
    'email' => $email
])->find();

if($result){
    //loginpage

    header('Location: /');
    exit();

}else{
    $db->query("INSERT INTO users(email, password) VALUES(:email, :pass)", [
        'email' => $email,
        'pass' => password_hash($password, PASSWORD_BCRYPT)
    ]);

    login($email);

    header('Location: /');
    exit();

}

