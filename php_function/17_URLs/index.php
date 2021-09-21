<?php

// classify Http methods

// 서버 만들기
switch($_SERVER['REQUEST_METHOD']){
    case 'GET':
        echo filter_input(INPUT_GET, 'message');
        break;
    case 'POST':
        print($_POST);
        break;
    default:
        http_response_code(404);
}