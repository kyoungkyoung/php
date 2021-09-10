<?php 
class A{
    public function foo(){

    }
}

class B{
    public function create(){
        return new class extends A {};//익명 클래스의 객체 생성해줌
    }
}
$b = new B();
var_dump($b->create()->foo()); //이렇게 익명 클래스를 생성한다.
?>