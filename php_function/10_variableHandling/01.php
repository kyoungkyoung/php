<?php

$message = 'Hello world';

// set type(type casting) ------------------------
var_dump(settype($message, 'int')); //$message를 int로 변환
echo PHP_EOL;

// get type ------------------------
echo gettype($message);
echo PHP_EOL;

// check type ------------------------
var_dump(is_int($message)); //true ; echo하면 true는 1
echo is_string("Hi");

echo is_iterable([]); //1 반복 가능하냐
echo is_array([]); //1

// value check ------------------------
echo isset($message); //1

$message = null;
echo empty($message); //1

// convert to ------------------------
var_dump(boolval(10)); //true, 0은 false
var_dump(strval(10)); //"10" / 10 -> "10"

// print ------------------------
$var = [
    'message' => 'hello'
];

print_r($var); //print_r은 사람이 읽기 편하게!!
var_dump($var); //debug하기 편하게!!
var_export($var); //php가 표현할 수 있는 형태로
echo PHP_EOL;

// serialize ------------------------
$serialized = serialize($var); 
echo $serialized; //a:1:{s:7:"message";s:5:"hello";}

$arr = unserialize($serialized);
var_dump($arr);
/*
array(1) {
  'message' =>
  string(5) "hello"
}
*/

// free ----------------------------------------
// 변수의 할당 해제
unset($arr); //메모리에서 변수 할당이 해제가 된다
// var_dump($arr); //unset을 했기 때문에 $arr은 undefined이라고 error발생

// get defined ----------------------------------
// var_dump(get_defined_vars());
get_defined_constants();


// constants --------------------------------------
const MESSAGE = 'Hello world';
echo defined('MESSAGE'); //1 ; 상수가 존재하는지를 알려줌

if(defined('Message')){
    constant('MESSAGE'); //constant('상수')는 상수를 얻어오는 함수 ; const '상수' - 얘는 상수 정의
}

