<?php
// get params number ------------------------
function foo(){
    $argCount = func_num_args(); //argument 개수 구하기
    switch($argCount){
        case 1:
            echo func_get_arg(0); //얘는 array중에 index위치
            break;
        default:
            var_dump(func_get_args()); //얘는 return이 array
    }
}

// call -------------------------------------
// 함수를 call하기
// foo(); //이렇게 해도되고
call_user_func('foo', 'Hello, world',10); //default출력
/*
array(2) {
  [0] =>
  string(12) "Hello, world"
  [1] =>
  int(10)
}
*/
call_user_func('foo',10); //10

foo(10); //10

// check function exists --------------------
var_dump(function_exists('foo')); //true

// exit; -> 이렇게 써주면 script 중간에 끝난다
// register_shutdown_function();은 중간에 써도 된다
// register_shutdown_function(function(){
//     echo 'Exit';
// });

// get defined functions --------------------
//선언된 함수들을 보여준다, user라고 나와있는 것이 내가 직접 선언한 함수
var_dump(get_defined_functions()); 


// call function when script is end
// script가 끝나면 호출하는 함수
register_shutdown_function(function(){
    echo 'Exit';
});
