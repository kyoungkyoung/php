<?php

$messages = [
    'Hello world',
    'Who are you',
    'Bye'
];

//Insert ----------------------------------
// $messages[] = 'whoops'; //이렇게 주면 제일 마지막에 값이 들어간다
$messages[3] = 'whoops';
var_dump($messages);

//Select ----------------------------------
echo $messages[3]."\n";

//Update ----------------------------------
$messages[3] = 'Do you know?';
echo $messages[3]."\n";

//Delete ----------------------------------
unset($messages[3]);
//echo $messages[3]; //error - unset을 해줬기 때문에 값이 없어서
var_dump($messages);


//-----------------------------------------------
//update방법 추가
$messages = [
    ...$messages, //...은 spread operater
    'good morning',
    'afternoon'
];

var_dump($messages); // 기존 $messages 배열에 good morning과 afternoon이 추가

