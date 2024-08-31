<?php

use Core\Session;

//Session::clear();

view('sessions/create.view.php', [
    'heading'=>'Log in',
    'errors' => Session::get('errors')
]);