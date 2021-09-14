<?php

// sort by value ------------------------
// function sort(array &$array, int $flags) ;얘는 &$array로 참조를 받는다
// 참조를 받는다는 것은 원본을 수정한다는 것이다
// sort는 오름차순
$numbers = range(1,5);
sort($numbers);
var_dump($numbers);

// rsort는 내림차순
rsort($numbers);
var_dump($numbers);


// assoc sort by value -----------------------------
// 연관 배열 ; key와 값으로 구성된 배열
// sort()와 rsort는 key값이 없어지고 index순으로 value값이 매핑되지만,
// asort()와 arsort()는 key값이 그대로 가고, value값에 따라 정렬한다
// key 값이 있을 때는 무조건 asort를 해줘야 key값이 사라지지 않는다!!!
$arr = [
    'r' => 'Bye',
    'c' => 'Who are you?',
    'a' => 'Hello world'
];

// sort($arr);
// var_dump($arr);

/*
array(3) {
    [0] =>
    string(3) "Bye"
    [1] =>
    string(11) "Hello world"
    [2] =>
    string(12) "Who are you?"
}
*/

asort($arr); //오름차순 정렬
arsort($arr); //내림차순 정렬
var_dump($arr);
/*
array(3) {
  'c' =>
  string(12) "Who are you?"
  'a' =>
  string(11) "Hello world"
  'r' =>
  string(3) "Bye"
}
*/

// sort by key --------------------------------------
// key값에 따라 정렬
ksort($arr);
var_dump($arr);
/*
array(3) {
  'a' =>
  string(11) "Hello world"
  'c' =>
  string(12) "Who are you?"
  'r' =>
  string(3) "Bye"
}
*/

// krsort($arr);
// var_dump($arr);

// sort by callback --------------------------------
usort($numbers, function($a, $b){ //callback함수는 값을 2개를 받는다
    return $a > $b; //이러면 오름차순 정렬
});

var_dump($numbers);

uasort($arr, function($a, $b){
    return $a > $b;
});

var_dump($arr);
