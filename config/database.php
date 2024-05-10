<?php

namespace Config;

class Database
{
    public static function connect():\mysqli
    {
        $conn = mysqli_connect($_ENV["DB_HOST"],$_ENV["DB_USER"],$_ENV["DB_PASS"],$_ENV["DB_NAME"]);
        return $conn;
    }
}