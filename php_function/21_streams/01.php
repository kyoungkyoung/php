<?php
//stream : data의 흐름

// stream context
$context = stream_context_create();
stream_context_set_option($context,[
    'http' => [
        'method' => 'GET'
    ]
]);

echo file_get_contents('http://exampl.com', false, $context);//파일을 얻어와서 읽음


// stream filter
// 특정 data 받기
var_dump(stream_get_filters());
$fh = fopen(dirname(__DIR__,2).'/README.md', 'r');
stream_filter_append($fh, 'string.toupper'); //filter name은 stream_get_filters()에 있었던 것들 중 하나
// echo stream_get_contents($fh); //fread와 비슷
//echo fread($fh,12);

// stream wrappers
stream_get_wrappers();

// $fh = fopen('php://output', 'w');
// fwrite($fh, 'hello');
file_put_contents('http://output', 'hi');
