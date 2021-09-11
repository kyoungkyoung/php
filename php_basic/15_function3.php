<?php
//First class function ; 1급함수
//값으로 함수를 취급할 수도 있다.
$foo = function (){ //function(){} 이런게 바로 익명함수
    return 'Hello';
};
echo $foo();
echo "\n";

//함수를 값으로 취급할 수 있기 때문에 parameter로도 넘길 수 있다
function foo($a){
    echo $a();
}
// foo(); //이 foo(function(){})이게 가능!!
foo(
    function(){
        return 'foo(function(){}';
    }
);
echo "\n";


//-----------------------------------------
//Higher-order function ; 고차함수
//함수를 return 하는 함수
function foo2(){
    return function(){
        return 'foo2 function()';
    };
}

// echo foo2(); //-error
$func = foo2(); //함수를 return하기 때문에 다시한번 호출할 수 있다.
echo $func(); //foo2 function()
