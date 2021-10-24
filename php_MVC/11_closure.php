<?php
//closure

function foo(){
    return 'Hello, world';
}

// $foo = fn () => 'Hello!!'; //익명 함수 ; 익명함수는 closure의 객체
// var_dump(Closure::fromCallable('foo')); //class Closure#1 (0) {}
// var_dump($foo); //class Closure#1 (0) {}

//-------------------------------------------------------------------

class A {
    public $message = "Hello, world";
}

$foo = fn() => $this->message;

var_dump($foo); // class Closure

$a = new A();

// function call ; 
var_dump($foo->call($a)); // Hello, world

$foo2 = $foo->bindTo($a, null); 
var_dump($foo2()); // Hello, world
var_dump($foo2);
/*
class Closure#3 (1) {
  public $this =>
  class A#2 (1) {
    public $message =>
    string(12) "Hello, world"
  }
}
*/

function foo3(\Closure $callback){
    var_dump($callback());
}

foo3(fn() => 'Hi, world');