<?php

// connection
$conn = mysqli_connect(
    'localhost',
    'wk',
    '1234',
    'myapp_test' //이거 password는 1234
);

// Query --------------------------------

// AUTO_INCREMENT 키워드를 사용하면 해당 필드의 값을 1부터 시작하여 새로운 레코드가 추가될 때마다 1씩 증가된 값을 저장한다.
// AUTO_INCREMENT 키워드 다음에 대입 연산자(=)를 사용하여 시작값을 변경할 수 있습니다.

// case 1. mysqli_query
// $queryString = 'create table tests(
//     id INT auto_increment primary key,
//     message varchar(255) 
// )';

// mysqli_query($conn,$queryString);

// case 2. mysqli_prepare

mysqli_autocommit($conn,false);
$stmt = mysqli_prepare($conn, 'insert into tests(message) values(?)');

$params = 'Hello world';
//$params = ['Hello world'];
mysqli_stmt_bind_param($stmt, 's', $params);

mysqli_stmt_execute($stmt);

// mysqli_commit($conn);
mysqli_rollback($conn);


// select

// case 1. mysqli_stmt_get_result

// $stmt = mysqli_prepare($conn, 'select * from tests');
// mysqli_stmt_execute($stmt);

// $result = mysqli_stmt_get_result($stmt);
// while($row = mysqli_fetch_assoc($result)){ //결과를 연관 배열로 얻어와라
//     var_dump($row);
// }

// case 2. mysql_stmt_fetch

$stmt = mysqli_prepare($conn, 'select message from tests');
mysqli_stmt_execute($stmt);

mysqli_stmt_bind_result($stmt, $message);
while($row = mysqli_stmt_fetch($stmt)){
    var_dump($message);
}

// close connection
mysqli_close($conn);
// mysqli_query($conn, 'drop table tests');