<?php

try{
    throw new Exception('Hello, world'); //예외 던지기
}catch(Exception $e){
    var_dump($e->getMessage());
}finally{
    var_dump('Finally');
}

set_error_handler(function($errno, $errstr){
    throw new ErrorException($errno,$errstr);
});
set_exception_handler(fn (Exception $e) => var_dump($e->getMessage()));