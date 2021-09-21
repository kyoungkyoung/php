<?php

// Http Header -------------------------------------
// set
header('X-Header: Hello, world'); //custom header

// remove
header_remove('X-Header');;

// 자주 쓰이는 것
// header('Location')
// header('Cache-Control')
// header('HTTP/1.1 200 OK');


// HTTP Response Code ------------------------------
// case 1. http_response_code
http_response_code(404);

// case 2. header
header('HTTP/1.1 404 Not Found');