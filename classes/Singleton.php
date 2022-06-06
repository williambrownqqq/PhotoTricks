<?php

class Singleton{

    private static $instance = null;

    private function __construct(){}

    public static function getInstance(){
        if(self::$instance == null){
            self::$instance = new Singleton();
        }
        return self::$instance;
    }

    public function show(){
        var_dump($this);
    }

    public function __clone() {
        $this->instance = clone $this->instance;
    }
}