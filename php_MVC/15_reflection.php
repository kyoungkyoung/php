<?php

class A {
    private string $message = 'Hello Hi';

    public function __construct(string $message){
        $this->message = $message;
    }
}

class B extends A {

}

//reflectionClass

$refClassA = new ReflectionClass('\A');
var_dump($refClassA->getProperties(ReflectionProperty::IS_PRIVATE));
/*
array(1) {
  [0] =>
  class ReflectionProperty#2 (2) {
    public $name =>
    string(7) "message"
    public $class =>
    string(1) "A"
  }
}
*/
var_dump($refClassA->getProperties(ReflectionProperty::IS_PUBLIC)); // array(0) {}

$refClassB = new ReflectionClass('\B');
var_dump($refClassB->isSubclassOf('\A')); //true