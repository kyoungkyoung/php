<?php

//filter(데이터 검증) : 데이터가 적절한 양식인지를 결정하는 것
//sanitizing(데이터 제거) : 데이터의 어떤 부정확한 문자를 제거하는 것
// filter -----------------------------------
echo $message = filter_var('Hello, world',FILTER_SANITIZE_STRING);
var_dump($message2 = filter_var(10,FILTER_SANITIZE_STRING)); // 암묵적으로 int 10을 string 10으로 바꿔준다
var_dump(filter_var('wkjang4@gmail.com',FILTER_VALIDATE_EMAIL,FILTER_SANITIZE_EMAIL));

echo filter_var('Hello world', FILTER_CALLBACK, [
    'options' => function ($value){
        return $value;  
    }
]);
//Hello world
echo PHP_EOL;


// fix -----------------------------------
echo filter_var('<html><head></head></html>', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
//&lt;html&gt;&lt;head&gt;&lt;/head&gt;&lt;/html&gt;
echo PHP_EOL;

// request -------------------------------
// filter_input();


// has -----------------------------------
// 존재하는지 안하는지 검증
var_dump(filter_has_var(INPUT_SERVER, 'REMOTE_ADDR'));


// request -----------------------------------



// ------------------------------------------
// if(filter_has_var())



$str = "<h1>Hello World!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;
