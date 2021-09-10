<?php
//Switch ~ case

$context = 1;
switch($context){ //조건식이 아닌 변수의 값이 들어간다
    case 1:
        echo 'Hello, world'; break; //반드시 break필요!!
    case 2:
        echo 'Who are you?'; break;
    default:
        echo 'Bye';
}

echo "\n";
//switch ~ case -> If
if($context==1){
    echo 'Hello, world';
}elseif($context==2){
    echo 'Who are you?';
}else{
    echo 'Bye';
}
echo "\n";

//--------------------------------
switch($context):
    case 1:
        echo 'Hello, world'; break; //반드시 break필요!!
    case 2:
        echo 'Who are you?'; break;
    default:
        echo 'Bye';
    endswitch;