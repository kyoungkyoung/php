<?php

 'Hello world';
 "Hello world";

//Type Casting
(string)10; //      -> "10"
(string)true; //   -> "1" 
(string)false; //   -> "" 빈 문자열

//Null Type
null;

//(Int) Integer Types
10; // -> Decimal
0777; // -> 8진수는 앞에 0을 붙여준다 8진수 777
0xF; // -> 16진수는 앞에 0x를 붙인다 16진수 F
0b0101; // -> 2진수는 앞에 0b를 붙인다 2진수 0101

echo (int) 'Hello world'; // 0
echo (int) '50x'; // 50
echo (int) true; // 1
echo (int) false; // 0
echo (int) null; // 0

//(float, double) Floating point numbers
1.234;
1.2e3;
7E-3;

//Boolean Type
true;
false;

//얘들은 var_dump()로 확인
(bool) 10; // true
(bool) []; // false -> 빈 배열은 false
(bool) ''; // false
(bool) null; // false
