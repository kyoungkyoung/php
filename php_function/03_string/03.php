<?php
//replace-------------------------
echo str_replace('Hello', 'Hi', 'Hello world'); // Hello -> Hi로 바꿔서 Hello world 출력

//repeat-------------------------
echo str_repeat('*', 5); //*을 5번 출력해라

//split ; array return
var_dump(str_split('Hello, world', 3)); //길이에 따라서 분리 ; explode는 내가 원하는 기준으로 분리

//word count-------------------------
//format에 0 ; 단어의 개수
//         1 ; 단어별로 쪼개서 array로 return ; key = 0,1,2... , value = 그 단어 자체 
//         2 ; array로 return ; key = 글자의 위치, value = 그 단어 자체
var_dump(str_word_count('Hello, world',0));
var_dump(str_word_count('Hello, world',1));
var_dump(str_word_count('Hello, world',2));
/*
array(2) {
  [0] =>
  string(5) "Hello"
  [7] =>
  string(5) "world"
}
*/

//compare-------------------------
//strcmp('a','b') ; a>b : 1, a=b : 0, a<b :-1  
echo strcmp('Hello, world', 'Hello, world'); //
echo PHP_EOL;

//position-------------------------
echo strpos('Hello, world', 'w'); //w의 위치를 찾고싶다
echo PHP_EOL;

//first position-------------------------
//2개이상을 주면 char단위로 H or i를 찾아서 찾은것부터 출력
echo strpbrk('Hello, world', 'Hi'); //Hello, world
echo strpbrk('Hello, world', 'lw'); //llo, world
echo PHP_EOL;

//length-------------------------
echo strlen('Hello, world'); //12
echo PHP_EOL;

//reverse-------------------------
echo strrev('Hello, world'); //dlrow ,olleH