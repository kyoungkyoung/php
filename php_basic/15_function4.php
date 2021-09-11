<?php
//Access Global Variables
$message = "Hello world";
function foo(){
    //php 에서는 전역변수를 쓰고 싶다면 반드시 global $~~; 이렇게 먼저 지정해줘야한다
    // global $message;
    // $message = $GLOBALS['message']; //이렇게 하면 message의 값이 변하지 않는다
    // $message = &$GLOBALS['message']; //php에 내장되어있는 것! -> global변수에 접근 가능하게 해준다 
    // echo $message;
    // $message="Who are you?";


    $GLOBALS['message'] = 'Who are you?'; //이렇게 전역변수의 값을 바꿔줄 수도 있다.

}
foo();

echo $message;
echo "\n";

//-----------------------------------
//Static variables
function foo2(){
    static $count = 0;
    return ++$count;
}


echo foo2();
echo foo2();

// echo $count; //static임에도 불구하고 count는 함수 안에 있기 때문에 로컬변수로 취급

//--------------------------------------------
//Closure
function foo3($arg){
    return function () use($arg){ //parameter로 받는 $arg 값을 이 안의 함수에서도 사용하려면
    // return function (){        //use($arg)를 이용해 알려줘야한다 
        return $arg; //$arg를 사용하려면 알려줘야한다       
        // global $message;
        // return $message;
        // return $GLOBALS['message'];
    };
}

// echo foo3('foo3의 $arg'); //return 값이 함수일 경우에는 이렇게 바로 사용하면 error
//이렇게 두번에 걸쳐서 값을 출력해줘야한다.
$func = foo3('foo3의 $arg');
echo $func(); 
