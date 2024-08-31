<?php

namespace Core;

use Core\App;
use Core\Database;

class Authenticator {

    public function attempt($mail, $pass){
        

        $user = App::resolve(Database::class)->query("SELECT * FROM users WHERE email = :email", [
            'email' => $mail
        ])->find();


        if($user){
            if(password_verify($pass, $user['password'])) {
                $this->login($mail);            
                return true;
            }
        }

        return false;
    }

    public function login($email)
    {
        $_SESSION['user'] = [
            'email' => $email
        ];

        session_regenerate_id(true);
    }

    public function logout()
    {
        Session::destroy();
    }

}