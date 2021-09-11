<?php

$message = "message Hello world";

function foo(){
    return "function foo() Hello world";
}

echo "echo Hello world";

return [
    // 'message' => 'return Hello world'
    'message' => $message
];