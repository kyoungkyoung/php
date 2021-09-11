<?php
//Constants Scope
function foo(){
    define('MESSAGE', 'Hello');
    // const MESSAGE = 'hi'; //함수 내부에서는 const를 써서 상수를 선언할 수 없다

}
foo();
// echo MESSAGE; //함수 안에서 상수를 선언했다면 선언한 함수를 호출후에 상수를 출력할 수 있다


//---------------------------------------------
//Callbacks (Don't need 'use') 
//상수는 변수와는 다르게 use를 사용하지 않아도 상수는 접근 가능하다
//단, 함수 안에서 define()으로 상수를 선언할 경우 선언한 함수를 먼저 호출해야한다

$foo = function (){
    return MESSAGE;
};

echo $foo();