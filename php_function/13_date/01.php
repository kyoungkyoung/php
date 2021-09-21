<?php

// timezone -----------------------------------
// setting(set)
date_default_timezone_set('Asia/Seoul');
// get
echo date_default_timezone_get(); //Asia/Seoul
echo PHP_EOL;

// get time : unix timestamp -----------------------------------
echo $t = time(); //1631670375

// case 1
var_dump(localtime($t, true));

// case 2
var_dump(getdate($t));

// timestamp format -----------------------------------

// case 1. strftime()
echo strftime('%d/%m/%Y %H:%M:%S', time());
echo PHP_EOL;

// case 2. date()
echo date('d/m/Y H:i:s', $t).PHP_EOL;
echo date('d/M/Y H:i:s', $t);
echo PHP_EOL;

// make a timestamp -----------------------------------
echo $timestamp = mktime(1,15,30); //뒤에 값을 넣지 않으면 defalt로 현재 시간이 출력
echo date('d/m/Y H:i:s', $timestamp);
echo PHP_EOL;

// parsing string time -----------------------------------
// var_dump(strptime('2021/9/15', '%d/%m/%Y %H:%M:%S')); //windows는 지원안함
// var_dump(strftime('%d/%m/%Y %H:%M:%S', time()), '%d/%m/%Y %H:%M:%S'));


// string to time -----------------------------------
// echo strtotime('now');
$timestamp2 = strtotime('+2 days');
echo date('d/m/Y H:i:s', $timestamp2);
echo PHP_EOL;


// script time execution time check -----------------------------------
echo $stime = microtime(true);
sleep(1); // 1초동안 delay 
// usleep(1); //얘는 microtime기준으로
echo PHP_EOL;

echo microtime(true) - $stime; // 1.0141839981079
//true를 써줘야 계산 가능



