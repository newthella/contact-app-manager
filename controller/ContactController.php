<?php
namespace Controllers;
use Config\Database;
use Core\View;
use Models\Contact;


class ContactController
{
    public function read()
    {
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
            $msg = 'Data berhasil ditambah';
            return header('Location: /contact-app-manager/');
        } else {
            $msg = 'Data gagal ditambah';
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
            $msg = 'Data berhasil diperbarui';
            return header('Location: /contact-app-manager/');
        } else {
            $msg = 'Data gagal diperbarui';
            return header('Location: /contact-app-manager/');
        }
    }
    public function delete()
    {
        $contact = new Contact(Database::connect());
        $id = $_POST['id'];
        if($contact->delete($id)) {
            $msg = 'Data berhasil dihapus';
            return header('Location: /contact-app-manager/');
        } else {
            $msg = 'Data gagal dihapus';
            return header('Location: /contact-app-manager/');
        }
    }
}


?>