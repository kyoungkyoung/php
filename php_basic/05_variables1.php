<?php

//Define Variables
$message = 'Hello world'; // String
$userCount = 0; // Int
$pi = 3.14; // Double
$is_visited = false; // Boolean
$temp = null; // NULL

//echo $message;

//"" 와 ''의 차이점------------------------------------
echo "The message is $message\n"; //""이건 안에 변수를 넣을 수 있다
echo "The message is {$message}\n";
// echo 'The message is {$message}'; //''이건 안에 변수 넣을 수 없다

//-------------------------------------------------------
//Here Doc, Now Doc
//1. Here Doc -> 변수의 값이 출력
//HTML은 임의의 구분자
echo <<<HTML
<html>
    <head>
        <title>$message</title>
    </head>
</html>
HTML;
//구분자는 붙여서 쓴다 안그러면 error


//2. Now Doc -> 구분자에 ''표시 ; 변수가 그냥 string처럼 출력
//HTML은 임의의 구분자
echo <<<'HTML'
<html>
    <head>
        <title>$message</title>
    </head>
</html>
HTML;

//---------------------------------------------
//Free
// unset($message);
echo $message;


