<?php

// DateTime
$dt = new DateTime('now', new DateTimeZone('Asia/Seoul'));
$dt2 = DateTime::createFromFormat('Y/m/d', '2021/9/16', new DateTimeZone('Asia/Seoul'));

var_dump($dt2);
/*
class DateTime#3 (3) {
  public $date =>
  string(26) "2021-09-16 16:51:03.000000"
  public $timezone_type =>
  int(3)
  public $timezone =>
  string(10) "Asia/Seoul"
}
*/
var_dump($dt->format('h:i:s Y/m/D')); //string(20) "12:00:00 2021/09/Thu"
var_dump($dt2->format('h:i:s Y/m/d')); //string(19) "04:54:49 2021/09/16"

$dt->modify('+2 days');

var_dump($dt->format('h:i:s Y/m/d')); //string(19) "12:00:00 2021/09/18"

// DateInterval
$dt5 = new DateTime('now', new DateTimeZone('Asia/Seoul'));
$di = new DateInterval('P1Y2M2D'); //public $y => int(1) public $m => int(2) public $d => int(2)
$di2 = DateInterval::createFromDateString('+2 days'); //

var_dump($di);
var_dump($di2); //public $d => int(2)



// DatePeriod
$dt3 = new DateTime('now');
$dt4 = new DateTime('2021-12-31');
$di3 = DateInterval::createFromDateString('+5 days');

$dp = new DatePeriod($dt3, $di3, $dt4);
var_dump($dp);