<?php
//break 
for($i=0; $i<10; $i++){
    break; //java랑 똑같!
    echo $i++; //걍 무시
}

for($i=0; $i<10; $i++){
    continue; //java랑 똑같!
    echo $i++; //continue라서 바로 for문으로 올라간다
               //for문을 돌긴 하지만 continue를 만나서 이건 무시된다
}

//--------------------------------
//php에서는 break에 level을 줄 수가 있다.
//그냥 break; 하면 java와 같지만 break 2 하면 2단계의 반복문을 다 빠져나온다
for($i=0; $i<10; $i++){
    for($j=0; $j<10; $j++){
        break 2; //break에 level을 줄 수가 있다.
                 //이렇게 하면 밖의 for문까지 빠져나감
        echo $j; //break로 무시
    }
    echo $i;
}

//--------------------------------
$sum = 0;
for($i=0; $i<10; $i++){
    for($j=0; $j<10; $j++){
        continue 2;   
    }
    $sum += $i;
}
echo $sum; //0
