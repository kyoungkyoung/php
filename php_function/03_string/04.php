<?php

// sub string -------------------------
echo strstr('http://example.com', '//'); //example.com ; '//' 뒷부분만 출력
echo PHP_EOL;

// token -------------------------
echo strtok('http://example.com', '//'); //http: ; '//' 앞부분만 출력
echo strtok('//'); //한번더 해주면 '//' 뒷부분만 출력
echo PHP_EOL;

// slice -------------------------
echo substr('Hello, world', 2, 6).PHP_EOL; //llo, w ; 2번째 index부터 6개
echo substr('Hello, world', 7, strlen('Hello, world')-1).PHP_EOL;
echo substr('Hello, world', 7); //length를 적어주지 않으면 끝까지 출력
echo PHP_EOL;

// compare -------------------------
echo substr_compare('Hello, world', 'world', -5); //-5번째 index부터 world비교 ; 맞으면 0, 틀리면 -1 출력
echo PHP_EOL;

// replace -------------------------
echo substr_replace('Hello, world', 'Hi', 0, 4); //Hio, world ; 0부터 4까지를 Hi로 바꿈
echo substr_replace('Hello, world', 'Hi', 0, 5); //Hi, world
echo PHP_EOL;

// count -------------------------
echo substr_count('Hello, world', 'l', -5).PHP_EOL; // 1 ; -5부터 l이 몇개 있는지 count
echo substr_count('Hello, world', 'l').PHP_EOL; // 3 ; 찾고자하는 index부터를 적지 않으면 전체에서 찾아서 count
echo substr_count('Hello, world', 'l', 0, 4); // 2 ; 0번째부터 length가 4인 곳까지 count
echo PHP_EOL;

// wrapping -------------------------
echo wordwrap('Hello, world', 5).PHP_EOL; //5글자 이상 길이가 넘어가면 줄 바꿈
/*
Hello,
world
*/
echo wordwrap('Hello, worldasdfsdaf', 5, "\n", true).PHP_EOL; //5글자 이상 길이가 넘어가면 줄 바꿈 ; 엄격! ; 하나의 단어여도 줄바꿈이 일어남
/*
Hello
,
world
*/
echo wordwrap('Hello, worldasdfsdaf', 5, "\n", false); //5글자 이상 길이가 넘어가면 줄 바꿈 ; 유연! ; 하나의 단어이면 줄바꿈 안일어남
/*
Hello,
worldasdfsdaf
*/
