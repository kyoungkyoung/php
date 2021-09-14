<?php

// absolute -------------------------
echo abs(-1); //1; 절댓값
echo PHP_EOL;

// floating point ---------------------
echo ceil(6.7).PHP_EOL; //7; 올림
echo floor(6.7); //6; 내림
echo round(6.56, 1); //66.6; 반올림 ; 소수 2째자리에서 반올림
echo PHP_EOL;

// hex -> dec -------------------------
$byte = random_bytes(2);
$hex = bin2hex($byte);

echo hexdec($hex);
echo PHP_EOL;

// max, min -------------------------
echo max(range(1,5)); //range(a,b) : a와 b를 포함한 숫자형 배열 만들기
echo min(range(1,5));
echo max([1,2,3,4,5,6]);
echo max(range(1,5));
echo PHP_EOL;

// a^b -------------------------
echo 2**4; //16
echo pow(2,4); //16
echo PHP_EOL;

// create a random int -------------------------
echo rand(0,10); //0부터 10까지의 수 랜덤으로 출력
echo PHP_EOL;

// square root -------------------------
echo sqrt(16);//4