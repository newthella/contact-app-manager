<?php

namespace App;

class Database
{
    public static function connect():\mysqli
    {
        $conn = mysqli_connect("localhost","root","","contact_app_manager");
        return $conn;
    }
}