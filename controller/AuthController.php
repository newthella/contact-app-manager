<?php
namespace Controllers;
use Config\Database;
use Core\View;
use Models\Manager;


class AuthController
{
    public function setLogin()
    {
        View::set('login');
    }
    public function login()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $manager = new Manager(Database::connect());
        $manager = $manager->findByUsername($username);
        if(isset($manager)) {
            if($password == $manager['password']) {
                $_SESSION['manager'] = true;
                return header('Location: /contact-app-manager');
            }
        }
        return header('Location: /contact-app-manager/login');
    }
    public function setRegister()
    {
        View::set('register');
    }
    public function register()
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $manager = new Manager(Database::connect());
        if($manager->create($username,$email,$password)) {
            return header('Location: /contact-app-manager/login');
        } else {
            return header('Location: /contact-app-manager/register');
        }
    }
    public function logout()
    {
        session_destroy();
        return header('Location: /contact-app-manager/login');
    }
}


?>