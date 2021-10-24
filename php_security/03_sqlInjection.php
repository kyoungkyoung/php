<?php

$conn=mysqli_connect(
    'localhost',
    'wk',
    '1234',
    'myapp_test'
);

$_POST = [
    'id' => '1'
];
['id' => $id] =$_POST;

// $result = mysqli_query($conn, "select * from tests where id={$id} limit 1");

$stmt = mysqli_prepare($conn, "select * from tests where id=? limit 1");
mysqli_stmt_bind_result($stmt,'s',$id);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);