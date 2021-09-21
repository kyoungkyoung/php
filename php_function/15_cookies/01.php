<?php

// cookies
setcookie('myCookie', 'Hello world');


// get a cookie
echo $_COOKIE['myCookie']; //myCookie값을 가져옴

// remove a cookie
setcookie('myCookie', '', time()-3600); //cookie지우기 ; 시간을 마이너스로 준다