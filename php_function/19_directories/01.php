<?php

//chage a directory
chdir(__DIR__);

//get current working directory
echo getcwd(); //현재의 working directory 출력

//reading a directory
$files = scandir(__DIR__.'/../..');
var_dump($files);

//directory handling
//open ; 일단 directory 먼저 열어주고
$dir = opendir(__DIR__.'/../..');

//read
while($name=readdir($dir)){
    var_dump($name);
}

//close
closedir($dir);
