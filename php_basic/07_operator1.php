<?php
//String Operator ; 문자열 연산자 . 
echo 'Hello '. 'world'."\n";

//---------------------------------------
//Null coalescing ; Null 연산자 ??
$message = null;

//message가  null이면 Hello, world 출력, 그게 아니라면 원래 messgae값 출력
echo $message ?? 'Hello, world'; //Hello, world

//---------------------------------------
//Logical Operators ; 논리 연산자 && or xor

//true and true ; &&
var_dump(true && true); //true
var_dump(true && false); //false

//true or true ; ||
var_dump(true || true); //true
var_dump(true || false); //true
var_dump(false || true); //true

//true xor true ; xor
var_dump(true xor true); //false -> 같으면 false
var_dump(true xor false); //true -> 다르면 true

//부정 연산자 not ; !
var_dump(!true); //false

//-----------------------------------------




