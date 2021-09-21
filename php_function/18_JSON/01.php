<?php

// JSON encode/decode

echo $json = json_encode([
    'message' => 'Hello JSON'
]);
//{"message":"Hello JSON"}

var_dump(json_decode("{\"message\" :\"hi\"}"));
//option에 true를 주면 배열로 나오고 주지 않으면 객체로 나온다
var_dump(json_decode($json, true)); 
