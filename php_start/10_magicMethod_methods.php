<?php 
//magic Method->클래스 내부에서 php가 자체적으로 호출하는 함수
//magic Methods : Methods
class A{
    public function __call($name, $args){
        //__call()이라는 magic method는 정의되지 않은 함수가 있을때, 대신 호출되는 함수이다.
        //그래서 만약 $a->foo()를 했는데 foo()가 없고 __call()이 있으면 실행했을때
        //error가 발생하는 것이 아니라 foo()대신 __call()함수가 불려진다.
        // return "__call()";
        var_dump($name,$args);
        // return $args[0]." ".$args[1]; //args는 배열로 들어간다!! 따라서 출력도 배열로!
    }
    public static function __callStatic($name, $args){
        var_dump($name,$args);
    }
    public function __invoke(...$args){
        var_dump($args);
    }
    // public function foo(){
    //     //return "foo()";
    //     var_dump(__METHOD__);
    // }
}

$a = new A();
// echo $a->foo();
//echo $a->foo('hong',"gil");
// $a->foo(); //얘는 동적메서드 호출 ->일반적인 public function __call(){} 호출
// A::foo(); //얘는 정적메서드 호출 -> static붙은거
$a("Hong","gil"); //얘는 __invoke()함수 호출



?>