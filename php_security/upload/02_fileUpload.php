<?php

// file Upload

switch($_SERVER['REQUEST_METHOD']){
    case 'GET':
        echo <<<HTML
<form action="/" method="POST" enctype="multipart/form-data">
    <input type="file" name="upload">
    <input type="submit">
</form>
HTML;
    break;

    case 'POST':
        $file = $_FILES['php_security'];
        // $pathinfo = pathinfo($file['name']);
        if(is_uploaded_file($file['tmp_name'])){ //임시 파일인 $file['tmp_name']가 있으면
            echo dir(__FILE__);
            //move_uploaded_file($file['tmp_name'], "/php_security/upload/".$file['name']);
        }
        break;
    
    default:
    var_dump($_SERVER['REQUEST_METHOD']);
        http_response_code(404);

}