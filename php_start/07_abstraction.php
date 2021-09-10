<?php
abstract class Az{
    protected $message = "Hello";
    abstract public function foo();
    public function sayHello(){
        return $this->message;
    }
}

// new A(); 추상클래스는 new할 수 없음

class B extends Az{
    //반드시 foo()를 오버라이딩해야한다.
    public function foo(){
        return __CLASS__;
    }
}

$b = new B();
var_dump($b->foo()); // string(1) "B"
var_dump($b->sayHello()); //string(5) "Hello"

?>
