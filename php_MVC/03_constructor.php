<?php

// Constructor, Destructor ; 생성자, 소멸자
class A {
    public function __construct(){
        var_dump(__METHOD__);
    }
    public function __destruct(){
        var_dump(__METHOD__);
    }
}

$a = new A();
var_dump('hi'); //hi가 소멸자보다 먼저 호출 ; 소멸자는 메모리에서 사라질때 호출(제일 마지막에)

// Constructor Parameters
class B {
    public $message;

    public function __construct($message)
    {
        $this->message = $message; //message 초기화    
    }
}

$b = new B('Hello');

// Inherit
class C extends A{
    public function __construct()
    {
        parent::__construct(); // 이거 안해주면 부모 클래스의 생성자 호출 안함
    }
    public function __destruct()
    {
        parent::__destruct();
    }
}

$c = new C();


// final
class D {
    public $message2;

    public final function foo3(){

    }
}

class E extends D {
    // public function foo3()
    // {
        
    // }
}

// Visibilty
class V {
    public $public = 'public';
    public $protected = 'protected';
    public $private = 'private';
}

class VV extends V {
    private $message3;
    private static $instance;

    private function __construct(){
        var_dump($this->message3);
    }
    
    public static function getInstance(){
        return self::$instance ?: self::$instance =new self();
    }
}

$v = new V();
var_dump($a -> private);
// var_dump($a -> protected);
// var_dump($a -> private); 