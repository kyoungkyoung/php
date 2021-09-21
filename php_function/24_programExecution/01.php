<?php

// one way process handling
// echo 'php'.dirname(__DIR__,2).'/php_basic/01_basic.php';

//popen은 command 부분에 php  로 php를 쓰고 반드시 한칸 띄워줘야한다
$ph = popen('php '.dirname(__DIR__,2).'/php_basic/01_basic.php', 'w');

echo stream_get_contents($ph);

pclose($ph);


// two way process handling