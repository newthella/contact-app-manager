<?php
require_once 'app/models/contact.php';
require_once 'app/database.php';
use App\Models\Contact;
use App\Database;

$contact = new Contact(Database::connect());

$id = $_POST['id'];
if($contact->delete($id)) {
    $msg = 'Data berhasil dihapus';
    return header('Location: dashboard.php?success='.$msg);
} else {
    $msg = 'Data gagal dihapus';
    return header('Location: dashboard.php?failed='.$msg);
}

?>