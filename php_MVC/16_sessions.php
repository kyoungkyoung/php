<?php

/*
create table sessions(
     id varchar(225) unique not null,
     payload text,
     createdAt timestamp default current_timestamp,
     updatedAt timestamp default current_timestamp on update current_timestamp); 
*/

ini_set('session.gc_maxlifetime', 10);

// Session Handler Interface

class DatabaseSessionHandler implements SessionHandlerInterface{
    private PDO $pdo;

    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    public function open($save_path, $session_name){
        return true;
    }
    public function read($session_id){
        $sth = $this->pdo->prepare('select * from sessions where id=:id');
        if($sth->execute([ ':id' => $session_id ])){
            if($sth->rowCount() > 0){
                $payload = $sth->fetchObject()->payload;
            }else {
                $sth = $this->pdo->prepare('insert into sessions(id) values(:id)');
                $sth->execute([ ':id' => $session_id ]);
            }
        }
        return $payload ?? '';
    }
    public function write($id, $data)
    {
        
    }
    public function destroy($id)
    {
        
    }
    public function gc($max_lifetime)
    {
        
    }
    public function close()
    {
        
    }
}

$dbPdo = new PDO('mysql:dbname=sessions;host=172.30.1.54;', 'root', '40387961As!!');

session_set_save_handler(new DatabaseSessionHandler($dbPdo));
session_start();