<?php

namespace App\Core;

class Request{
    private $params;
    private $method;
    private $agent;
    private $ip;

    public function __construct(){
        $this->params = $_REQUEST;
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->agent = $_SERVER['HTTP_USER_AGENT'];
        $this->ip = $_SERVER['REMOTE_ADDR'];
    }

    public function params(){
        return $this->params;
    }

    public function method(){
        return $this->method;
    }

    public function agent(){
        return $this->agent;
    }

    public function ip(){
        return $this->ip;
    }
}