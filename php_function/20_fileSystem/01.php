<?php

//from path
//어떤 경로가 주어지면 그 경로의 마지막 부분을 출력해준다
echo __FILE__.PHP_EOL; //D:\php\php_function\20_fileSystem\01.php
echo basename(__FILE__).PHP_EOL; //01.php 

echo dirname(__FILE__,2); // option에 level값을 2를 줘서 어디까지 출력할지 결정한다 D:\php\php_function
echo PHP_EOL;

//to absolute path
//절대 경로 출력
echo realpath('.'); //D:\php\php_function\20_fileSystem
echo PHP_EOL;

//get path info
var_dump(pathinfo(__FILE__));//
echo PHP_EOL;

//find files
//glob

var_dump(glob('./*.php'));

//file name check
var_dump(fnmatch('*.php', 'index.php')); //true


//file(directory) control
copy('./01.php', './file_functions.php');
mkdir('./sessions');
unlink('./file_functions.php');
rmdir('./sessions');
