<?php

// extension

//loded
var_dump(extension_loaded('mbstring')); //mbstring이라는 확장이있으니까 -> bool(true)
//php extension들이 load되어있는지를 확인한다
//phpinfo(), $php -m, get_loaded_extenstion()로 확장을 확인할 수 있다.
//여기에 확장이 있다면 true, 없으면 false값을 return한다

//gets
// var_dump(get_loaded_extensions()); //loded된 extension들을 array형식으로 가져온다

//----------------------------------------------
// include path

//set
//일반 include를 사용하면 경로를 전부 적어줘야하지만
//set_include_path를 사용해 위치를 어느정도 지정해주면 include로 하위파일명만 적어주면된다
// set_include_path(__DIR__);
// include 'hello.php';
//get
// var_dump(get_include_path());
//reset의 역할
// restore_include_path();
// include 'hello.php';

//-----------------------------------------
//get included files
// var_dump(get_included_files());

//-----------------------------------------
//get php information
// phpinfo();

//-----------------------------------------
//php.ini
// ini_set('session.gc_maxlifetime', 1440); //php.ini의 설정을 변경한다
// var_dump(ini_get('session.gc_maxlifetime'));
// ini_restore('session.gc_maxlifetime'); //reset

//-----------------------------------------
//environment variables ; 환경변수

//1. putenv, getenv
putenv('APP_ENV=production');
var_dump(getenv('APP_ENV')); //production

//2. $_ENV
$_ENV['APP_ENV']='development'; //set
var_dump($_ENV['APP_ENV']); //get ; development

//1번과 2번은 관계가 없다 ; 값이 다르게 나옴!!