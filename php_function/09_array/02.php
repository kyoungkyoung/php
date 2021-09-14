<?php

// generate numbers array
$numbers = [1,2,3,4,5];
var_dump(range(1,5)); //1-5까지를 원소로 갖는 배열 생성
/*
array(5) {
  [0] =>
  int(1)
  [1] =>
  int(2)
  [2] =>
  int(3)
  [3] =>
  int(4)
  [4] =>
  int(5)
}
*/


// folding ---------------------------------
// array를 통해서 새로운 값을 하나 만들어 낸다
array_reduce($numbers, function ($carry, $num){
    // echo '$carry = '; var_dump($carry); //carry값은 null이 계속 들어온다
    // echo '$num = '; var_dump($num); //num값은 $number의 값들이 차례로 들어온다
    var_dump($carry, $num);
    return $carry += $num * 2;
});


// check element in array ---------------------------
in_array(6,$numbers); //1 ; 있으면 true라서 1, 없으면 false, echo는 출력 안함


// get array keys ----------------------------------
// key값만 반환
var_dump(array_keys($numbers)); 
/*
array(5) {
  [0] =>
  int(0)
  [1] =>
  int(1)
  [2] =>
  int(2)
  [3] =>
  int(3)
  [4] =>
  int(4)
}
*/


// get array values -------------------------------
// value값만 반환
var_dump(array_values($numbers));


// make a array from variables
$message = 'Hello world';
$userCount = 0;
$pi = 3.14;
$is_visited = false;
$temp = null;

var_dump(compact('message','userCount', 'pi', 'is_visited', 'temp'));
//변수를 넣어주면 변수와 그 값을 각각 key값과 value값으로 매핑해서 배열을 만들어준다
/* 
array(5) {
  'message' =>
  string(11) "Hello world"
  'userCount' =>
  int(0)
  'pi' =>
  double(3.14)
  'is_visited' =>
  bool(false)
  'temp' =>
  NULL
}
*/

