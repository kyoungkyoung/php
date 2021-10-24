<?php

// define class
Class A {
    public $message = 'Hello world';

    public function foo3(){
        return $this -> message ;
    }
}

// create a new Instance ; 객체 생성
// 객체는 hip 영역에 저장
$a = new A();
var_dump($a->foo());

// Inherit ; 상속

class B extends A {
}

$b = new B();
var_dump($b->foo());

// in functions
function foo(A $a){
    return $a->foo();
}

foo($a);

// Context
class C extends A {
    public function foo3(){
        return new self(); // 자기 자신 class를 return var_dump($d->foo()); class C
        // return new static(); // class D
        // return new parent(); // class A
    }
}

class D extends C {
}

$d = new D();
var_dump($d->foo());

// Constants
class E {
    const MESSAGE = 'Hello';

    public function getConstant(){
        return self::MESSAGE; // ::얘는 상수에 접근할때 사용하는 scope 해결 연산자
    }

    public function getClass(){
        return __CLASS__;
    }
}

$e = new E();
var_dump($e->getConstant()); // Hello
var_dump(E::MESSAGE); // Hello
var_dump($e->getClass()); // E

// instanceof
$d = new D();
var_dump($d instanceof C); //true
var_dump($d instanceof A); //true


// Anonymous Classes
class F {
    public function create(){
        return new class extends G {}; //익명 class 를 return 할때는 반드시 new를 붙여줘야한다.
    }
}

class G {
    public function foo2(){

    }
}
$f = new F();
var_dump($f->create()->foo2()); // null
