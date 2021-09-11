<?php
//while
for($i=0; $i<10; $i++){
    echo $i;
}
echo "\n";

$i=0;
while($i<10){
    echo $i++;
    // $i++;
}
echo"\n";

//---------------------------
//do ~ while
//do 안에 있는걸 먼저 수행하고 while문 수행
$j=0;
do{
    echo $j++;
}while($j<10);
