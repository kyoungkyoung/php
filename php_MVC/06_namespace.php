<?php

// Namespace
namespace A {
    const MESSAGE = __NAMESPACE__;

    class A {
        public function foo(){
            return __METHOD__;
        }
    }

    function foo(){
        return __FUNCTION__;
    }

    function var_dump(){
        echo __FUNCTION__;
    }

    //현재의 namespace안에있는 var_dump() 메서드를 호출
    var_dump(); // A\var_dump

    //global namespace에 있는 var_dump() 메서드를 호출
    \var_dump('Hello world'); // string(11) "Hello world"

}

namespace A\B {
    class A {
        public function foo(){
            return __METHOD__;
        }
    }
}

// global namespace
namespace {
    // $a = new A\A(); // use A\A; + $a = new A();

    use A\A; // namespace A에 있는  class A를 사용하겠다
    use A\B\A as AB; // as로 별칭을 주지 않으면 위에있는 A\A 와 충돌이 난다(둘다 A클래스이기 때문에) 
    use function A\foo; // namespace A에 있는 function foo를 사용하겠다
    use const A\MESSAGE;

    $a = new A();
    $ab = new AB();

    var_dump($a -> foo()); // string(8) "A\A::foo"
    var_dump($ab -> foo()); // string(8) "A\A::foo"
    var_dump(foo()); // string(5) "A\foo"
    var_dump(MESSAGE); //string(1) "A"
    
}