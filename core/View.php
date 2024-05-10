<?php

namespace Core;

class View
{
    public static function set(string $view, $data = [])
    {
        require "view/$view.php";
    }
    public static function redirect(string $url)
    {
        header("Location: $url");
    }
}