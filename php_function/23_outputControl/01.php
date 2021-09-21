<?php

//output control

echo 'hello';
file_put_contents('php://stdout', 'hi');

echo PHP_EOL;


// control output stream

ob_start(); //buffer에 담아두기
echo 'Hello world';
// $message = ob_get_contents(); //buffer에 있는 내용 가져오기

//ob_flush()하면 ob_clean()전에 내용 다 내보냄
// ob_flush(); //buffer에 쌓인 내용을 다 내보내기; 이거 해주면 ob_get_contents()로 불러와서 담아주지 않아도됨
// ob_clean(); //buffer 지우기

//ob_end_flush(); //ob_flush() + ob_clean()

$message = ob_get_clean(); //최근 버퍼 내용을 가져오고 버퍼 지움


echo $message;

