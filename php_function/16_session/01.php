<?php

// set session save path -------------------------
// session은 기본적으로 파일에 저장이 된다
// session의 위치는 session이 시작되기 전에 설정이 되어야한다
session_save_path('./sessions');

// start a session -------------------------
session_start(); 

// set session value with key -------------------------
// key값을 mySession 으로 주고, value가 Hello world가 되는 방식
$_SESSION['mySession'] = 'Hello world';
echo $_SESSION['mySession'];

// get session id -------------------------
session_id();

// get session name -------------------------
session_name();

// run gc(garbage collection) -------------------------
//session의 유효기간이 지나면 gc를 이용해 session을 파괴시킨다
session_gc();

// get session cookie info -------------------------
// session_set_cookie_params(1440); //cookie 수명 지정
var_dump(session_get_cookie_params());

// remove a session value
unset($_SESSION['mySession']);

// reset session
session_unset();

// remove session file
session_destroy(); //권장하지 않음 

//session 상태
session_status();

// close session
session_commit();


// regenerate session id
session_regenerate_id();