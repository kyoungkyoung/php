<?php

// socket client
$sock = stream_socket_client('tcp://127.0.0.1:8080',$errno, $errstr);


// get data from server
echo fread($sock, 1024);

// send data to server
fwrite($sock, 'hello world from client');

// close a client