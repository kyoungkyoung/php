<?php
//magic Methods : Serialize

class A{
    private $message = "Hello world";

    public function __sleep(){
        //시리얼라이즈할 배열을 리턴해줘야한다.
        return ['message'];
    }
    public function __wakeup(){
        //이건 언시리얼라이즈
        var_dump(__METHOD__);
    }
}

$a = new A();
//serialize($a);
$serialized = serialize($a);
var_dump($serialized); //string(49) "O:1:"A":1:{s:10:"\000A\000message";s:11:"Hello world";}"
$unserialized = unserialize($serialized);
var_dump($unserialized);

//직렬화 인터페이스를 implements하는 방법이 더 good
class B implements Serializable{
    private $message = "Hello World B";
    public function serialize(){
        //내부에서 직렬화를 먼저 진행한다.
        return serialize($this->message);
    }
    public function unserialize($data){ //data는 serialize된 object
        $this->message = unserialize($data);
    }
}

$b = new B();
$serializedB = serialize($b);
var_dump($serializedB);
$unserializedB = unserialize($serializedB);
var_dump($unserializedB);










?>