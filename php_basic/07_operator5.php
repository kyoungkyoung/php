<?php
//Assignment Operators ; 할당 연산자
// =, +=, -=, /=, *=, %=, &=, |=, ^=, ^=, <<=, >>=, .=

$count = 0;
echo $count += 1;
echo "\n";

//문자열도 결합 가능
$message = 'Hello ';
$message .= 'world';
echo $message;

//Operator Precedence ; 연산자 우선순위
//Comparison > Logical //산술연산자 > 비교 연산자 > 논리 연산자 순서로!!

//1. <, > 비교연산자 먼저 
true && 10 < 20 == true && 10 > 20;
//2.
true && true == true && false;
//3.
true && true && false;
//4.
true && false; // false

//그냥 괄호쳐라
true && (10 < 20) == true && (10 > 20);