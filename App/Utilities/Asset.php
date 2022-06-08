<?php
namespace App\Utilities;

class Asset{
    public static function get(string $route): string{
        return $_ENV['HOST'] . 'assets/' . $route;
    }

    public static function css(string $route): string{
        return $_ENV['HOST'] . "assets/css" . $route;
    }

    public static function js(string $route): string{
        return $_ENV['HOST'] . "assets/js" . $route;
    }

    public static function fonts(string $route): string{
        return $_ENV['HOST'] . "assets/fonts" . $route;
    }

    public static function img(string $route): string{
        return $_ENV['HOST'] . "assets/img" . $route;
    }
}