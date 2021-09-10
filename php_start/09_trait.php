<?php
//trait는 클래스의 일부분이라고 생각하자
trait A {
    //public $message = "Hello world";
    private $message2 = "private Hello world";

    public function sayHello(){ //이렇게 일반 메서드를 가질 수 있고
        return $this->message2;
    }
    abstract public function foo(); //이렇게 추상 메서드를 가질수도 있다.
}

trait AA{
    public function sayHello(){
        return __TRAIT__;
    }
}

trait AAA{
    use A, AA{ //A와 AA를 사용하는데 둘다 sayHello()가 있으니까
        A::sayHello insteadof AA; //AA대신 A의 sayHello를 사용하겠다
                                //이렇게 어떤 메서드를 쓸 지 고를 수 있다
        A:: sayHello as protected h; //별칭 붙이기
    }
}


class B{
    use AAA; //trait는 use를 사용한다

    /* 클래스 밖에 trait를 만들어서 사용해도 되고, 클래스 안에 한번에 써줘도 된다
    use A, AA{ //A와 AA를 사용하는데 둘다 sayHello()가 있으니까
        A::sayHello insteadof AA; //AA대신 A의 sayHello를 사용하겠다
                                //이렇게 어떤 메서드를 쓸 지 고를 수 있다
        A:: sayHello as protected h; //별칭 붙이기
    }
    */
    public function foo(){
        return __CLASS__;
    }
}

$b = new B();
//echo $b->sayHello();
var_dump($b->sayHello());
//var_dump($b->h()); //h는 protected이기 때문에 사용할 수 없다


class C{
    private $message = 'Hello, world';

    public function sayHello(){
        return $this->message;
    }
}

trait D{
    public function sayHello(){
        return __TRAIT__;
    }
}

class E extends C{
    use D;
    public function sayHello(){
        return __CLASS__;
    }
}

$e = new E();
var_dump($e->sayHello());
//sayHello()의 우선순위는 class E에서 재정의가 된 함수 E -> use D의 D -> extends C의 C
//C가 나오고, D가 덮어쓰고, E가 오버라이드
?>