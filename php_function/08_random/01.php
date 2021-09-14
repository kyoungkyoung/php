<?php

// rand(a,b) vs random_int(a,b)
// a,b를 포함한 a-b사이의 random한 int 출력
echo rand(1,5).PHP_EOL;
echo random_int(1,5); //rand()보다 조금더 안전
echo PHP_EOL;

// create a random bytes
echo $bytes = random_bytes(32).PHP_EOL;
echo $t = bin2hex($bytes);