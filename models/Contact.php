<?php
namespace Models;

class Contact
{
    public int $id;
    public string $nomor_telepon;
    public string $owner;

    private \mysqli $conn;
    public function __construct(\mysqli $conn) {
        $this->conn = $conn;
    }
    public function create($nomor_telepon, $owner)
    {
        $stmt = mysqli_prepare($this->conn,'INSERT INTO contact (nomor_telepon, owner) VALUES (?,?)');
        mysqli_stmt_bind_param($stmt,'ss',$nomor_telepon,$owner);
        $status = mysqli_execute($stmt);
        return $status;
    }
    public function read()
    {
        $result = mysqli_query($this->conn,'SELECT * FROM contact');
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $data;
    }
    public function update($id, $nomor_telepon, $owner)
    {
        $stmt = mysqli_prepare($this->conn,'UPDATE contact SET nomor_telepon = ?, owner = ? WHERE id = ?');
        mysqli_stmt_bind_param($stmt,'ssi',$nomor_telepon,$owner,$id);
        $status = mysqli_execute($stmt);
        return $status;
    }
    public function delete($id)
    {
        $stmt = mysqli_prepare($this->conn,'DELETE FROM contact WHERE id = ?');
        mysqli_stmt_bind_param($stmt,'i',$id);
        $status = mysqli_execute($stmt);
        return $status;
    }



}