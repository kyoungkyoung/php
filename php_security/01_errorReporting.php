<?php

//error를 보이지 않게함으로써 보안을 높인다.
//error를 보이지 않게하는 방법

//1. ini_set('display_errors','Off');

ini_set('display_errors','Off');
error_reporting(E_ALL); //에러 레벨 설정 ; 얼마나 나올것이냐 ; E_ALL은 에러는 다 나와라
set_error_handler(function (){}); //error handler의 function에 return 값이 없어서 에러 안나옴

