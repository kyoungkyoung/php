<?php

// Reference
$message = 'Hello world';
$sayHello =& $message;

$sayHello = 'Who are you?';
var_dump($message); // Who are you?

// functions and methods
function foo(){
    // global $message;
    // var_dump($message); - error
    $message =& $GLOBALS['message'];
    $message = 'Bye';
}

var_dump($message); // Who are you?

foo();
var_dump($message); // Bye

function foo2(&$message) {
    $message = 'Hi world';
}

// foo2('Hi world'); // error 
foo2($mes);
var_dump($mes); // Hi world;

foo2($message);
var_dump($message); // Hi world;

// unset
$sayHello =& $message;
unset($sayHello);

var_dump($message);
// var_dump($sayHello); // error - undefined variable



// weak References
$messages = [
    'sayHello' => 'Hello'
];

var_dump((object) $messages);
/*
class stdClass#1 (1) {
  public $sayHello =>
  string(5) "Hello"
}
*/

