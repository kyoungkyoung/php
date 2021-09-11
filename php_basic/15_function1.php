<?php
//Define function
function foo(){
    echo 'Hello, world';
}

foo(); //Hello, world

//Variable function
$fn = 'foo';
$fn(); //foo()함수 호출
'foo'();
echo "\n";

//----------------------------------
//Define function with Parameters
function foo2(string $arg){
    echo $arg;
}

foo2('Hello!'); //Hello!

//Default Parameter
//값을 여러개 받을 때, default parameter를 주려면 제일 마지막에 프로그램이 꼬이지 않는다
//function foo3($a, $b=1, $c) <- 이게 아니라 function foo3($a, $b, $c=1) 이렇게 
function foo3($arg = "Hi"){ //$arg의 default값으로 Hi를 준다
    echo $arg;
}
foo3(); //Hi
foo3('Who are you?'); //Who are you?
echo"\n";

//----------------------------------------
//Define function with Rest parameters ; ...
function foo4(...$args){ //이렇게 되면 array형태로 받는다
    var_dump($args);
}
foo4();
foo4('americano', 'latte', 'ade');
echo"\n";

//-----------------------------------------
//Call function with Spread ; ...
function foo5($arg1, $arg2, $arg3){
    var_dump($arg1, $arg2, $arg3);
}
$args = ['a1', 'a2', 'a3'];
foo5(...$args);//배열로 한번에 넣어줄 수 있다