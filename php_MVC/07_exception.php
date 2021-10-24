<?php

try {
    throw new Exception('Hello');
}catch(Exception $e){
    var_dump($e -> getMessage());
}finally{
    var_dump('Finally');
}

class MyException extends Exception{

}

try {
    throw new MyException('Hello world');
} catch (Exception $e) {
    var_dump(Exception::class);
} catch (MyException $e) {
    var_dump(MyException::class);
}