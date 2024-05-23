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
                $_SESSION['success'] = 'Selamat datang';
                header('Location: /contact-app-manager');
                exit;
            }
        }
        $_SESSION['errors'] = 'Username atau password anda salah';
        header('Location: /contact-app-manager/login');
        exit;
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
            $_SESSION['errors'] = 'Akun berhasil dibuat';
            header('Location: /contact-app-manager/login');
            exit;
        } else {
            $_SESSION['errors'] = 'Akun gagal dibuat';
            header('Location: /contact-app-manager/register');
            exit;
        }
    }
    public function logout()
    {
        session_destroy();
        $_SESSION['errors'] = 'Akun berhasil logout';
        header('Location: /contact-app-manager/login');
        exit;
    }
}


?>