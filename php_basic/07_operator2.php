<?php
//Comparison Operators // 비교연산자

var_dump(10 == '10'); //true -> 값만 비교
var_dump(10 === '10'); // false -> 자료형까지 비교

var_dump(10 <> '10'); //false ; <>와 !=는 같은 의미
var_dump(10 != '10'); //false
var_dump(10 !== '10'); //true

var_dump(10<20); //true
var_dump(10<=20); //true
var_dump(10<=>20); //-1
//a <=> b a가 b보다 크면 1, 같으면 0 작으면 -1

var_dump('ab'<'ac'); //true ; a는 같고 c가 b보다 크기 때문에
var_dump('6x'<20); //true ; php에서 6x를 알아서 6으로 변환해서 계산

