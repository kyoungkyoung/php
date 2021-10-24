<?php

class A {
    public $message = 'Hello, world';

    public function foo(){
        return $this->message;
    }
}

class B extends A{
}

class_alias('A', 'MyClass'); // A클래스에 MyClass라는 별칭주기

var_dump(
    class_exists('MyClass'), // true
    property_exists('MyClass', 'message') // true
);

// $a = new MyClass(); // error... ; 별칭은 인스턴스 생성 안되는 듯...
$b = new B();

var_dump(
    get_class($a),
    get_class_vars('MyClass'), // get variables 
    get_class_methods('MyClass') 
);

/*
array(1) {
  'message' =>
  string(12) "Hello, world"
}

array(1) {
  [0] =>
  string(3) "foo"
}
*/

var_dump(
    get_object_vars($a),
    get_parent_class(new B()) // A
);

/* get_object_vars($a)
array(1) {
  'message' =>
  string(12) "Hello, world"
}
*/

var_dump(
    is_a($a, 'MyClass'), // true ; $a가 myClass의 객체인가
    is_subclass_of($b, 'MyClass'), // true ; 자식 클래스
    // $a instanceof MyClass,
    // $b instanceof MyClass
);