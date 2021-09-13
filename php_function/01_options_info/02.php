<?php

//set assert options

//php.ini
//zend.assertions = -1 ; 이게 default값
//zend.assertions = 1 로 바꿔보자
//ini_set('zend.assertions',1); //error
//ini.set()바꿀수 없는 것이 있다 ; 예를들면 zend.assertions
//ini.set()으로 바꿀 수 없는것은 직접 php.ini파일에서 변경해줘야한다

//active
assert_options(ASSERT_ACTIVE, true); //assert평가 활성화
//stop testing on failure ;실패를 해도 멈추지 않겠다
assert_options(ASSERT_BAIL, false); //실패한 assertion에서 실행종료
//php trace ; error message를 남길것인가
assert_options(ASSERT_WARNING, true); //실패한 assertion마다 php warning발행
//callback ; 함수를 호출할때 함수를 넘겨주는 함수가 바로 callback
assert_options(ASSERT_CALLBACK, 'assertFailure'); //실패한 assertion을 호출

function assertFailure(...$args){
    var_dump($args);
}



//assert

assert(false, __LINE__);