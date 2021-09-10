<?php
//상수는 한번 지정하면 변하지 않는다
//주로 대문자를 사용한다.
//상수는 string, int, array, boolean 전부 다 가능하다
//한번 선언하면 수정할 수 없다.

//1. const사용
const CONSTANT = "Hello, world";
const CONSTANT_INT = 10;
const CONSTANT_BOOLEAN = true;
const CONSTANT_ARRAY = [
    'message' => 'Hello, array'
];
var_dump(CONSTANT);
var_dump(CONSTANT_INT);
var_dump(CONSTANT_BOOLEAN);
var_dump(CONSTANT_ARRAY);

//----------------------------------------------
//2. define()사용
// define('CONSTANT', 'Hello, world');// error ; 상수는 한번만 선언이 가능하다 
$a = define('CONST', 'Hi, world'); //define()은 리턴값이 boolean형
var_dump($a);

// CONSTANT = 'who are you?'; //한번 선언된 상수는 수정 불가능


//-----------------------------------------------
//Magic Constants
echo __FILE__."\n";
echo __LINE__."\n";
echo __DIR__."\n"; //부모 directory 위치
