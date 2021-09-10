<?php
//Properties and Methods
class A{
    public $message = "Hello, world";

    public function foo(){
        return $this->message; //메소드나 프로퍼티나 접근할때는 화살표 사용 ; 화살표는 접근자
    }
}

$a = new A();
//var_dump($a->foo());

// Inherit(상속)
class B extends A{
}
$b = new B();
//var_dump($b->foo());

//in Functions
function foo (A $a){ //a의 객체를 받는다 
    return $a->foo();
}

foo($a); //이것도 가능하지만
//var_dump(foo($b)); //이렇개 a가 아닌 b도 값을 넣어줄 수 있다.

//Context
class C extends A{
    public function foo2(){
        //return new self(); // self는 자기 자신을 부른다. class C
        //return new static(); // static은 최신것?? 을 부른다. class D
        return new parent(); // parent는 부모를 부른다. class A
    }
}

class D extends C{

}

$d = new D();
//var_dump($d->foo());

//Constants(상수)
class E{
    //상수를 선언할 때에는 define()과 const가 있다. class내부에서 사용할 때는 const를 사용한다.
    //define();
    const MESSAGE = 'Hello, world'; //

    public function getConstants(){
        return self::MESSAGE; //상수에 접근할때는 :: ->scope 해결 연산자 이렇게 콜론 2개를 적는다.
    }

    public function getClassName(){
        return __CLASS__; //class의 이름을 return 해주는 매직메서드
    }

}

$e = new E();
//상수 접근 방법
// var_dump($e->getConstants()); //상수 접근 방법1
// var_dump(E::MESSAGE); //상수 접근 방법2
// var_dump($e->getClassName());

//Instanceof

$d = new D();
var_dump($d instanceof C); //instanceof는 php의 변수가 어떤 클래스에서 생성된 객체인지 확인할 때 사용된다.


?>