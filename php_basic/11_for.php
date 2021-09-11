<?php
// for
for($i=1; $i<=10; $i++){
    echo $i;
}

// for with array
$messages = [
    'Hello, world',
    'Who are you',
    'Bye'
];
echo "\n";

        // length대신 count()를 사용
for($i=0; $i<count($messages); $i++){
    echo $messages[$i] . PHP_EOL; //PHP_EOL : PHP End Of Line = 줄바꿈 
}

