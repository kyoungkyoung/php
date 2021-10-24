<?php

//PDO

try{
    $dbh = new PDO('mysql:dbname=phpblog;host=127.0.0.1;', 'root', '40387961As!!');

    // exec
    $dbh->exec('create table tests(`id` int primary key auto_increment)');

    //query
    $pstmt = $dbh->query('select * from posts limit 10');
    while($row = $pstmt->fetchObject()){
        var_dump($row);
    }

    // prepare
    $pstmt2 = $dbh->prepare('select * from posts where userId = :userId limit 10');
    
    if($pstmt2->execute(['userId' => 2])) {
        while($row = $pstmt2->fetchObject()) {
            var_dump($row);
        }
    }

    // transaction
    $dbh -> beginTransaction();

    if($dbh->inTransaction()){
        $dbh->exec('delete from posts where userId = 2');
        // 위에서 삭제했지만 rollback을 바로 했기 때문에 userId=2인 데이터는 지워지지 않는다.
        $dbh->rollback(); 
    }

} catch (PDOException $e) {
    var_dump($e->getMessage());
}