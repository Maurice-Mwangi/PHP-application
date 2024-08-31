<?php

namespace Http\Forms;

use Core\Validator;

class LoginForm {

    public $errors = [];

    public function validate($email, $password)
    {
        if(!Validator::email($email)) {
            $this->errors['email'] = "Provide a valid email address";
        }
        
        if(!Validator::string($password)){
            $this->errors['password'] = "Please provide password";
        }
        
        if(!empty($this->errors))
        {
            return $this->errors;
        }

        return false;

    }


    public function errors()
    {
        return $this->errors;
    }


    public function error($field, $message)
    {
        $this->errors[$field] = $message;
    }

}