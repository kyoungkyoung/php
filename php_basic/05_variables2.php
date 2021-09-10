<?php
//Variable variables ; 가변변수
$varName = 'message';
//$message = 'Hello, world';
$$varName = 'Hello, world';
//${$message} = 'Hello, world';
echo $message;