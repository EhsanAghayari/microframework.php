<?php
namespace App\Core;

use App\Utilities\Url;

class StupidRouter{
    private array $routes;

    public function __construct(){
        $this->routes = [
            '/microframework.php/colors/blue' => 'colors/blue.php',
            '/microframework.php/colors/red' => 'colors/red.php',
            '/microframework.php/colors/green' => 'colors/green.php',
        ];
    }

    public function run(){
        $current_route = Url::current_route();
        foreach($this->routes as $route => $view){
            if($current_route == $route){
                $this->includeAndDie(BASE_PATH . "views/$view");
            }
        }
        #404 header
        header("HTTP/1.1 404 Not Found");
        $this->includeAndDie(BASE_PATH . "views/errors/404.php");
    }

    private function includeAndDie($viewPath){
        include $viewPath;
        Die();
    }
}