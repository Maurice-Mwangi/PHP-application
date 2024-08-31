<?php 


use Core\Authenticator;
use Core\Session;
use Http\Forms\LoginForm;

$email = $_POST['email'];
$password = $_POST['password'];
$errors = [];

$form = new LoginForm();
if(!$form->validate($email, $password)){

    
    if((new Authenticator)->attempt($email, $password)){
        redirect('/');
    }
    
    $form->error('email', 'Password and E-mail do not match with account');
}


Session::flash('errors', $form->errors());

redirect('/login');
