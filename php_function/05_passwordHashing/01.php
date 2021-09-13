<?php

// create a hash value for password ----------------------------
$hash = password_hash('Hello, world', PASSWORD_DEFAULT);
$crypt = crypt('Hello, world', 'rl'); //얘는 salt를 받는다 -> php manual에 나와있음

// verify password hash ----------------------------
var_dump(password_verify('Hello, world', $hash)); //password 검증 ; 같으면 true, 다르면 false
var_dump(password_verify('Hello, world', $crypt));
var_dump(hash_equals($crypt, crypt('Hello, world', 'rl')));

//아래 2개를 사용하면 편할것~~
//$hash = password_hash('Hello, world', PASSWORD_DEFAULT);
//var_dump(password_verify('Hello, world', $hash));


// get info ----------------------------
var_dump(password_get_info($hash));//어떤 알고리즘을 사용했는지 알 수 있다
//hash를 쓰면 bcrypt로 나오고, crypt를 쓰면 unknown으로 나온다


// rehash ----------------------------
$hash = password_hash('Hello, world', PASSWORD_DEFAULT,[
    'cost' => 10
]); //cost(알고리즘에 드는 비용)가 높을수록 좋다

$options = ['cost' => 11 ];

//refresh가 필요하냐를 묻는것 ; true는 변경사항이 있으니까 refresh가 필요한거고,
//                             false는 변경사항이 없으니까 refresh 필요없다
var_dump(password_needs_rehash($hash, PASSWORD_DEFAULT, $options));
//$hash에 $options가 다른것이 있냐를 찾는 것!!