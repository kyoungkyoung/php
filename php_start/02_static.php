<?php
class A {
    public static $message = 'Hello world';

    public static function foo(){
        //return this->message; //정적 메서드(static)에서는 this를 사용할 수 없다.->error 발생
        return self::$message;
    }
}

var_dump(A::foo()); //string(11) "Hello world"
var_dump(A::$message); //string(11) "Hello world"'

$classname = 'A';

$a = new $classname();
var_dump($a->foo());
//var_dump($a->$message()); -> error


?>