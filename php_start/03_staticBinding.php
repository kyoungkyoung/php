<?php
class A{
    // public static function foo(){
    public function foo(){
        static::who(); // -> B의 who()가 호출 ; static은 가장 최근것!! 덮어 씌우니까~~
        //self::who(); // -> A의 who()가 호출
    }

    public static function who(){
    
        var_dump(__CLASS__);
    }
}

class B extends A{
    public static function test(){
        parent::foo();
        // self::foo(); //만약 나에게(B)에게 foo()가 없을때는 부모인 A로 가서 foo()를 찾는다.
        // A::foo(); //호출 정보를 전달하지 않는다 -> 이렇게 호출하면 static이든 self든 무조건 A의 who()를 호출한다.
    }
    public static function who(){
        var_dump("Hello world");
        var_dump(__CLASS__);
    }
}

$b = new B();
$b->test(); //B가 호출 ->A클래스의 who가 아닌 class B의 who()가 호출된다.
// classA의 foo()에 static으로 who()를 불렀기 때문!! -> static이기 때문에
// 나중에 (바인딩)프로그래밍되는 B의 who()가 덮어 썼기 때문이다
?>