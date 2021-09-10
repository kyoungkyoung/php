<?php
//if, elseif, else ; 걍 자바랑 같네~~
//[], '', false, 0, null -> 전부 false값
//빈 배열, 빈 문자열, 0, null은 false값
if(0){
    echo 'Hello, world';
}else if(false){
    echo 'who are you';
}else{
    echo 'Bye';
}
echo "\n";

//-----------------------------------
//Define Variables in If Context
if($message = 'Hello, world'){ //Hello world가 message에 할당; 무조건 true
    echo $message;
}
echo "\n";
if($message = false){ //Hello world가 message에 할당; 무조건 true
    echo $message;
}else{
    echo "false";
}
echo "\n";

//-----------------------------------
//대체문법 -> 반드시 endif;를 해줘야한다
// if(~~): ~~~; endif;  // if(~~): ~~~; elseif(~~): ~~~; endif;
if(true):
    echo 'Hello, world';
endif;
echo "\n";

if(false):
    echo 'Hello, world';
elseif(true):
    echo 'Who are you?';
else:
    echo 'Bye';
endif;

