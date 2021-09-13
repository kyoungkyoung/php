<?php

//print format string
// %s ; string
// %d ; int
// %f ; float

printf("%s", 'Hello, world'); // Hello, world
printf("%d", 'Hello, world'); // 0 ; int가 와야 하는데 string이 오면 0 return
printf("%d", 1234); //1234
printf("%.2f", 12.3456); //소수점 아래 2째자리수까지 ; 3째자리에서 반올림
printf("%10.2f", 12.3456); //앞에 자릿수 채우기
echo PHP_EOL;

$message = "Hello";
printf("%s, %d", $message, 10);
printf("%s, %d", ...[$message, 10]); //배열로 넣어주려면 ...[]이 형식으로 넣어준다
echo PHP_EOL;

vprintf("%s, %d", [$message, 10]); //parameter로 배열을 받으려면 vprintf를 사용해준다
//parameter를 배열로 받을경우, printf는 ...[] / vprintf는 [] 
echo PHP_EOL;

//-----------------------------------
//buffering ; java의 stringBuffer ; 임시저장소
echo $buf = sprintf("%s", 'Hi, world').PHP_EOL;
echo sprintf("%s, %d", ...[$message, 10]).PHP_EOL;
echo vsprintf("%s, %d", [$message, 10]);

//printf, vprintf ; 얘들은 output formatted string 으로 바로 출력해준다
//sprintf, vsprintf ; 얘들은 return a formatted string으로 echo를 붙여야 출력해준다
