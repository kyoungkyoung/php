<?php
//log level ; 모든 에러를 표시할것인지 일부만 할 것인지
error_reporting(E_ALL & ~E_NOTICE); //E_ALL :모든에러;  ,대신 &사용; !대신 ~사용 

//send error log
//error_log('hello wolrd',0); //0 : console
error_log('hello wolrd',3,__DIR__.'/log.log'); //3: file

//backtace ; 역추적
function foo(){
    // debug_print_backtrace(); //#0  foo() called at [D:\php\php_coreExextension\02_errorHandling\01.php:14]
    var_dump(debug_backtrace()); //더 상세하게 알려준다
}
 
// foo();

//ignore errors
function foo2(){
    // asdfasdf;
}
// @foo2(); //@해주면 에러 무시해준다

//error handling
set_error_handler(function ($errno, $errstr){
    // var_dump($errstr);
    switch($errno){
        case E_USER_ERROR: var_dump(($errstr)); break;
        default: echo "other";break;
    }
});

//Trigger custom error ; error message와 type을 보낼 수 있다
// trigger_error('Hello, world',E_USER_ERROR);
trigger_error('Hello, world',E_USER_WARNING);