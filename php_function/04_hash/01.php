<?php
// hash : 어떤 문자열이 있다면 고정된 길이로 출력이 되는 값을 hash값이라고 한다
// hash는 주로 보안쪽에서 사용한다
// get hash algorithms --------------------------
hash_algos(); // var_dump(hash_algos())를 해주면 여러 hash알고리즘을 알 수 있다

// create a hash --------------------------
// 한글자라도 다르면 다른 값을 출력한다
// hash함수는 유추를 할 수 없어야 한다 ; hash값을 보고 plain text를 유추할 수 없어야한다
echo $hash = hash('sha256', 'Hello, world'); //sha256알고리즘을 이용하는것
// echo $crypt = crypt('Hello, world', 'secret'); // salt값에 해당하는 'secret'의 값에 따라 hash값이 달라진다
echo PHP_EOL;

// check a hash --------------------------
// hash값이 유효한 hash인지를 살펴보는 것
var_dump(hash_equals($hash, hash('sha256', 'Hello, world'))); //true
echo PHP_EOL;

// hash handler --------------------------
$h = hash_init('sha256');
hash_update($h, 'Hello, world');
echo hash_final($h);
// $hash = hash('sha256', 'Hello, world') -> 얘랑 같다!!
echo PHP_EOL;

// HMAC : Hash-based Message Authentication Code
// hash기반의 메세지 인증
// key -> "secret"
hash_hmac_algos(); //hash_hmac로 뭘 이용해야할지 모르겠다 할때 찾아보기 위한 것

$hashHmac = hash_hmac('sha256', 'Hello, world', 'secret'); //hash()와는 다르게 key값이 들어간다
echo hash_equals($hashHmac, hash_hmac('sha256','Hello, world', 'secret'));
//hash_equals로 확인할때 key값이 같아야 한다!! ; 같으면 1, 다르면 출력 안함

