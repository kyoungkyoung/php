<?php
//Arrow Functions ; php7.4기능

$message = "Hi";

function foo($callback){
    echo $callback();
}

/* callback형식
1.
foo(function () use($message){
    return $message;
});
---------------------------------
2.
foo(fn() => $message);
fn() : 익명함수라는 키워드!! //약속
return값으로 $message를 준다.

*/

//=================================================================
//아래처럼 사용하면 된다!!

// 1.
$fn = function(){
    return 'Hello';
};

// 2.
$fn = fn() => 'Hello';
// echo 'foo($fn) = ';
foo($fn);
echo "\n";

//---------------------------------------------
// 1.
$fn2 = function($a=1) use($message){
    return 'Hello';
};

// 2.
$fn2 = fn($a=1) => $message;

//얘는 반드시 $fn()이렇게 호출을 해야한다.
//closure란 이름이 지어지지 않은 함수

echo '$fn2() = '. $fn2();



//==========================================
// $maFonction = function()
// {
//   echo 'Hello world !';
// };

// var_dump($maFonction); //이 부분에서 클로저 타입이 객체인것을 알수있다.

