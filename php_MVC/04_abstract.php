<?php

// Class Abstraction

function foo(AA $aa){
    return $aa -> foo();
}

abstract class AA {
    protected $message = 'Hello, world';

    public function sayHello(){
        return $this->message;
    }

    abstract public function foo();
}

class B extends AA {
    public function foo(){
        return __CLASS__;
    }
}

$b = new B();
var_dump($b->foo());

var_dump(foo($b));


// Interface

function fooAAA(AAA $aaa){
    return $aaa->foo();
}

interface AAA {
    public function foo();
}

class BBB implements AAA{
    public function foo(){
        return __CLASS__;
    }
}

$bbb = new BBB();
var_dump(fooAAA($bbb));


// Trait

