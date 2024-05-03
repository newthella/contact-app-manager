<?php
namespace Controllers;
use Config\Database;
use Core\View;
use Models\Contact;


class AuthController
{
    public function login()
    {
        View::set('login');
    }
    public function register()
    {
        View::set('register');
    }
    public function test($data)
    {
        echo $data; die;
    }
}


?>