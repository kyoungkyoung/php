<?php
//foreach ; php에서 제공하는 것

$response = [
    'name'          => 'PHP',
    'categoryId'    => 0,
    // 'messages'      => [
    //     'Hello, world',
    //     'Who are you',
    //     'Bye'
    // ]
];

//foreach(배열 as key => value){~~}
//foreach(배열 as value){~~}  -> key 생략가능

foreach($response as $key => $value){
    echo $value . PHP_EOL; // error ; 배열 안에 배열이 있기 때문에
    // foreach($value as $msg){
    //     echo $msg.PHP_EOL;
    // }

}

//------------------------------------
//배열안에 배열값을 꺼낼때 foreach문을 쓰게된다


$response = [
    // 'name'          => 'PHP',
    // 'categoryId'    => 0,
    'messages'      => [
        'Hello, world',
        'Who are you',
        'Bye'
    ]
];

foreach($response as $key => $value){
    // echo $value . PHP_EOL; // error ; 배열 안에 배열이 있기 때문에
    foreach($value as $msg){
        echo $msg.PHP_EOL;
    }

}