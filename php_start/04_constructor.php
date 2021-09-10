<?php
//Constructor(생성자), Destructor(소멸자)
class A{
    public function __construct(){ //이게 바로 생성자 선언 
        var_dump(__METHOD__);
    }
    public function __destruct()
    {
        var_dump(__METHOD__);
    }
}

//이렇게 하게되면 생성자, Hello world, 소멸자 순으로 출력
// $a = new A();
// unset($a); //객체를 해제시키는것 -> 이걸 해주면 생성자, 소멸자, Hello world순으로 출력
// var_dump("Hello world");

//Constructor Parameters
class B{
    public $message;
    public function __construct($message){
        $this->message = $message;
    }
}

//$b = new B("Hello world");
//var_dump($b);

//Inherit(상속)
class C extends A{
    public function __construct(){
        parent::__construct();
    }
    public function __destruct(){
        parent:: __destruct();
    }
}

$c = new C();



?>