<?php
class A{
    public $message;

    //final을 해주게 되면 재정의(오버라이드)를 할 수 없다.
    public final function foo(){
    
    }
}

class B extends A{
    //final을 해주게 되면 재정의(오버라이드)를 할 수 없다.
    // public function foo(){}
}
?>