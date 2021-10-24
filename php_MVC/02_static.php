<?php

// Static

class A {
    public static $message = 'message';

    public static function foo(){
        return self::$message;
        // return $this->$message; // static에서는 $this 사용 불가 ; error
    }
}

var_dump(A::foo());
var_dump(A::$message);


// Static Binding
class C {
    public static function foo2(){
        var_dump('c의 foo2()');
        static::who(); //static의 who()를 호출 했기 때문에 제일 마지막에 who()가 정의된 class D()의 who()가 호출된다.
        // self::who(); //이렇게하면 c의 who()가  호출
    }
    public static function who(){
        var_dump('c의 who()');
        var_dump(__CLASS__);
    }
}

class D extends C {
    public static function test(){

        C::foo2();

        var_dump('d의 test()');
        parent::foo2();
    }
    public static function who(){
        var_dump('d의 who()');
        var_dump(__CLASS__);
    }
}

$d = new D();
$d->test();
