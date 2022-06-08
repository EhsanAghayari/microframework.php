<?php
namespace App\Utilities;

class Url{
    public static function current(): string{
        # getting current url and even query parameters
        return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . ":/$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    }
}