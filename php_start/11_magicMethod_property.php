<?php
//magic Methods : Property

class A{
    private $message;

    public function __isset($name){
        
        return isset($this->$name);

    }
    public function __unset($name){
        unset($this->$name);
    }
    public function __set($name, $value){ //setter
        $this->$name = $value;
    }
    public function __get($name){ //getter
        return $this->$name;
    }
    // 이렇게 setter, getter대신 __set, __get 매직메서드 사용이 가능하다.
    // public function setMessage(){}
    // public function getMessage(){}
}

$a = new A();
// isset($a->message);
// echo $a->__set("hong","man");
$a->message = "Hello";
var_dump($a->message);

?>