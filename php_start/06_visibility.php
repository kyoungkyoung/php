<?php
class A{
    public $public = "public";
    protected $protected = "protected";
    private $private = "private";
}

$a = new A();
//var_dump($a->public);
// var_dump($a->protected);
//var_dump($a->private);

class B extends A{
    public function foo(){
        return $this->protected;
    }
}

$b = new B();
var_dump($b->foo()); //이렇게 하면 protected접근 가능


class C extends A{
    //private $message = "Hello";
    private static $instance;
    private function __construct(){
        var_dump($this->message);
    }
    public static function getInstance(){
        //return new self();
        return self::$instance ?: self::$instance = new self();
    }
}

$c = C::getInstance();
//$c = new C(); //생성자가 private이기 때문에 객체 생성이 안된다.


?>