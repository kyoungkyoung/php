<?php

function foo(A $a){
    return $a->foo();
}

interface A {
    //interface는 무조건 public을 사용한다.
    public function foo();
}
interface AA extends A{
    public function sayHello();
}

// class B implements A{
//     public function foo(){
//         return __CLASS__;
//     }
// }

class B implements AA{
    public function foo(){
        return __CLASS__;
    }

    public function sayHello()
    {
        return "Hello";
    }
}

$b = new B();
var_dump(foo($b));
var_dump($b->sayHello());

?>