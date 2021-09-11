<?php
//inclue(_once) 뒤에 파일명을 적어준다 - include(_once) '파일명'; 
// include 'HelloWorld.php'; // include는 중복되면 error발생
// include_once 'HelloWorld.php'; //inclue_once는 여러번 써도 에러x ; 중복해서 사용 가능하다
// echo PHP_EOL;
// var_dump($message); //그럼 변수와
// echo PHP_EOL;
// foo(); //함수 전부 다 사용가능하다


//require(_once) 
//include와 동일한데 include는 파일이없어도 error가 나지 않지만
//require는 파일이 존재하지 않으면 error발생
// require 'HelloWorld.php';
// foo();

//-----------------------------------------------------
//Return
$args = include 'HelloWorld.php';
// echo $args; //return 값이 배열이기 때문에 이건 안되고
var_dump($args); //var_dump()로 해야 출력된다