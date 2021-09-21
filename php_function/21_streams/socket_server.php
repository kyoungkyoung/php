<?php

// socket server
$server = stream_socket_server('tcp://127.0.0.1:8080',$errno, $errstr);

// listening
while ($sock = stream_socket_accept($server)){
    //서버는 클라이언트가 연결 할때까지 기다린다
    //일정 시간이 지나면 서버가 꺼진다 ; ini파일에 설정 되어있음
    stream_socket_get_name($sock, true);

    //send data to client
    fwrite($sock, 'Hello world from server', 1024);

    //get data from client
    echo stream_get_contents($sock);

    //close connection
    fclose($sock);

}

// close a server
fclose($server);