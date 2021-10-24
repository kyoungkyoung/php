<?php

// Magic Methods: Methods

class MagicMethods {
    public function __call($name, $args){
        var_dump($name, $args);
    }
    public static function __callStatic($name, $arguments)
    {
        var_dump($name, $arguments);
    }
    public function __invoke(...$args){
        var_dump($args);
    }
    
}

$a = new MagicMethods();
$a->foo('Hi');
MagicMethods::foo('Hello');
$a('ggg');


// Magic Method : property

class MagicMethodP{
    private $message;

    public function __set($name, $value){
        $this->$name = $value;
    }
    public function __get($name){
        return $this->$name;
    }
}

$mp = new MagicMethodP();
$mp->message = 'HIHI';
var_dump($mp->message);