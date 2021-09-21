<?php

// file handling
$path = dirname(__DIR__, 2).'/README.md';
echo $fh = fopen($path, 'r');
echo PHP_EOL;
// file reading

// case 1. functions
file_get_contents($path); //string을 리턴
file($path); //array를 리턴
// readfile($path); //output stream으로 echo나 var_dump를 해주지 않아도 알아서 리턴
// fpassthru($fh); //output stream으로 return
echo fread($fh, 11); //length에 file전부다를 하려면 filesize($path)
/*
aaa
bbb
c
*/
echo PHP_EOL;

// case 2. with loop
while(($line = fgets($fh)) && !feof($fh)){
    //echo $line; // 줄별로 파일의 내용을 읽음; 파일의 마지막(end of file)부분 까지   
}


// file pointer
//set
fseek($fh,0,SEEK_SET); //얘를 이렇게 해주면 file pointer의 위치는 제일 처음
//get
echo ftell($fh); //file pointer의 현재위치
//is ended
//fseek을 해주면 false를 안해주면 treu를 return
var_dump(feof($fh));//file pointer의 위치가 마지막까지 왔닌 ; boolean형 return
//reset
rewind($fh); //file pointer초기화해줌



// file writing
$path = './HelloWorld.txt';
echo $fh = fopen($path, 'w'); //mode를 w에서 a로 바꿔주면 덮어쓰기가 가능

// case 1. file_put_contents
file_put_contents($path, 'Hello');

// case 2. file handler
rewind($fh);
fwrite($fh, 'hello'); //output stream
//output stream으로 내보내지 않은 것들을 강제로 내보내기
fflush($fh); //buffer에 남아있는 data들을 강제로 내보낸다
fclose($fh);


// file slice
// 원본을 바꾼다
$fh = fopen($path, 'r+'); //reading + writing
ftruncate($fh, rand(1, filesize($path)));


// file close
fclose($fh);