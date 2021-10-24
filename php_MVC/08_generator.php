<?php

//Generator : break point 를 줘서 중간중간 외부에 값을 던져준다고 생각하면된다

function gen() {
    yield 1;
    yield 2;
    yield 3;
}

$gen = gen();
var_dump($gen); //class Generator#1 (0) {}

// var_dump($gen->current()); // 1
// $gen->next();
// var_dump($gen->current()); // 2

foreach($gen as $number){
    var_dump($number); // 1 2 3
}

//--------------------------------------------

function gen2(){
    yield 1;
    yield from gen();
    yield 2;
}

foreach(gen2() as $number){
    var_dump($number); // 1 1 2 3 2
}

//---------------------------------------------

function gen3(){
    yield 'message' => 'Hello world';
}

foreach(gen3() as $key => $value){
    var_dump($key, $value); // string(7) "message" string(11) "Hello world"
}