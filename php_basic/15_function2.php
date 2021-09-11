<?php
//return value 
function foo(){
    return 'a';
}
echo foo(); //a

//-----------------------------------
//return with context
function foo2(bool $is){
    if($is){
        return 'Hello';
    }
    return 'Bye';
}
echo foo2(true); //Hello
echo foo2(false); //Bye

//-------------------------------------------------
//return variables
function foo3($a){
    return $a;
}
echo foo3('졸려'); //졸려