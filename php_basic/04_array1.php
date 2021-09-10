<?php
//define Array

// 1.
$messages = [
    'Hello, world',
    'Who are you?',
    'Bye'
];

//2.
$messages = array('Hello world', 'Who are you?', 'Bye');
//-----------------------------------------

//define Array with key.
$messages = [
    0         => 'Hello, world',            // key이 0인 것에 hello world
    'message' => 'Who are you?',    // key가 message인 것에 who are you
    'Bye'                           // key를 주지 않고도 가능
];
//------------------------------------------

//Destructuring : 배열을 분해해서 변수에 담는 것 ; 비구조화 할당
//1. without key
list($message) = $messages;
//오른쪽에 있는 messages라는 배열이 분해가되서 0번째 값인 Hello world가 messaage라는 변수에 들어가게 된다.
var_dump($message);

// list(,$message) = $messages; //,를 붙여줘서 0번째 값은 생략하고 1번째 값을 넣겠다
[ , $message] = $messages; //이것도 가능!!
var_dump($message);


//2. with key
[0 => $message] = $messages;
var_dump($message); //Hello world

['message' => $message] = $messages;
var_dump($message); //who are you


