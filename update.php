<?php
require_once 'app/models/contact.php';
require_once 'app/database.php';
use App\Models\Contact;
use App\Database;

$contact = new Contact(Database::connect());

$id = $_POST['id'];
$nomor_telepon = $_POST['nomor_telepon'];
$owner = $_POST['owner'];


if($contact->update($id,$nomor_telepon,$owner)) {
    $msg = 'Data berhasil diperbarui';
    return header('Location: dashboard.php?success='.$msg);
} else {
    $msg = 'Data gagal diperbarui';
    return header('Location: dashboard.php?failed='.$msg);
}
?>