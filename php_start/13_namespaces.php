<?php
//namespaces -> 구역을 나눈다 라는 의미

// namespace A; -> 거의 이렇게 쓴다.
//이 아래부분이 A구역에 해당하는 코드들이다
//주로 class나 함수가온다.
//하나의 문서에 주로 하나의 namespace를 사용한다
//그렇지만 아래처럼 namespace여러개를 사용할 수도 있다.
// namespace A{

// }
// namespace B{

// }
namespace A{
    const MESSAGE = __NAMESPACE__;

    class A{
        public function foo(){
            return "A/A의 ".__METHOD__;
        }
    }
    function foo(){
        return "a namespace의 function ".__FUNCTION__;
    }

    function var_dump(){
        echo __FUNCTION__;
    }
    var_dump();
    \var_dump("Hello world"); //이렇게 해주면 내가 아는 var_dump()
                              // global namespace를 호출하기 위해서는 앞에 \사용해준다

}

namespace A\B{
//namespace A아래에 있는 자식 namespace
    class A{
        public function foo(){
            return "A/B/A의 ".__METHOD__;
        }
    }
}

// use A\A;//A namespace안에있는 A class를 쓰겠다 -> 여기서의 에러는 A namespace안에 여러개의 classA가 있기 때문

namespace{ //이게 global namespace와 같은 거
    use A\A; //바로 위에서는 되지 않았던게 global namespace 안에서는 이게 가능!! 
    // use A\B\A; //이렇게 해주면 A class가 중복이 되기 때문에 충돌 발생
    use A\B\A as AB; //이렇게 별칭을 줄 수 있다
    use function A\foo; //A namespace안에있는 function foo를 쓰겠다
    use const A\MESSAGE; //A namespace안의 상수를 쓰겠다

    // $a = new A();
    $ab = new AB();
    // var_dump( $a->foo() ); //이렇게하면 namespace A안에 있는 class A의 function foo()를 호출한다
    //                        //string(8) "A\A::foo"
    var_dump($ab -> foo());
    var_dump(foo());
    var_dump(MESSAGE);
    //use를 사용하지 않고 아예 선언할 때 
    // $a = new A\A();
    //var_dump($a->foo());

}
