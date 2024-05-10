<?php
namespace Controllers;
use Config\Database;
use Core\View;
use Models\Contact;


class ContactController
{
    public function read()
    {
        if(!isset($_SESSION['manager'])) {
            return header('Location: /contact-app-manager/login');
        }
        $contact = new Contact(Database::connect());
        $data = $contact->read();
        View::set('dashboard',$data);
    }
    public function create()
    {
        $contact = new Contact(Database::connect());

        $nomor_telepon = $_POST['nomor_telepon'];
        $owner = $_POST['owner'];

        if($contact->create($nomor_telepon,$owner)) {
            return header('Location: /contact-app-manager/');
        } else {
            return header('Location: /contact-app-manager/');
        }
    }
    public function update()
    {
        $contact = new Contact(Database::connect());

        $id = $_POST['id'];
        $nomor_telepon = $_POST['nomor_telepon'];
        $owner = $_POST['owner'];
    
    
        if($contact->update($id,$nomor_telepon,$owner)) {
            return header('Location: /contact-app-manager/');
        } else {
            return header('Location: /contact-app-manager/');
        }
    }
    public function delete()
    {
        $contact = new Contact(Database::connect());
        $id = $_POST['id'];
        if($contact->delete($id)) {
            return header('Location: /contact-app-manager/');
        } else {
            return header('Location: /contact-app-manager/');
        }
    }
}


?>