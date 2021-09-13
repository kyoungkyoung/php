<?php

//add slashes at quotes
// var_dump(addslashes("'")); // "\'"
echo addslashes("sd'faa'")."\n"; // sd\'faa\' ; 싱글따옴표 앞에온다 ; 이 함수를 쓰려면 '를 반드시 써줘야함
$slashe = addslashes("sd'faa'");
//remove
echo stripslashes($slashe).PHP_EOL; //sd'faa'

//---------------------
//Binary to Hex
$bytes = random_bytes(16);
echo $bytes.PHP_EOL;
$hex = bin2hex($bytes);
echo $hex.PHP_EOL;
echo hex2bin($hex).PHP_EOL;

//----------------------
//one way hash ; 암호화 하기
echo crypt('Hello, world', 'secret'); //복구안됨
echo PHP_EOL;

//----------------------
//split, join
//explode ; array를 return
$url = 'http://example.com';
$exp = explode('//', $url); //$url을 //로 split한다
var_dump(explode('//',$url));
$split = str_split($url,3);
var_dump(str_split($url,3)); //얘는 글자수에 따라서 split

//implode ; string을 return
echo implode('//',$exp).PHP_EOL;
echo implode(str_split($url,3)).PHP_EOL;
echo join($split).PHP_EOL;
echo PHP_EOL;

//--------------------------
//HTML entities
$html = <<<'HTML'
<html>
    <body>Hello</body>
</html>
HTML;
$encoded = htmlentities($html); //html코드로 바꿔준다
echo $encoded.PHP_EOL;
/*
&lt;html&gt;
&lt;body&gt;&lt;/body&gt;
&lt;/html&gt;
*/
$specailencoded = htmlspecialchars($html); //htmlentities보다 html entities로 바꿔주는 범위가 좁다
echo html_entity_decode($specailencoded);
/*
<html>
    <body></body>
</html>
*/
echo html_entity_decode($encoded);
/*
<html>
    <body></body>
</html>
*/
echo PHP_EOL;

//-------------------------------
//strip HTML tags ;html태그 전부 날리기
echo strip_tags($html, '<body>'); //<body>태그만 남기고 날리기
echo strip_tags($html); //태그는 전부 날아가고 내용은 살아있다
echo PHP_EOL;

//-------------------------------
//\n -> <br>
echo nl2br("Hello, \nworld");
/*
 Hello, <br />
world
 */
echo PHP_EOL;

//-------------------------------
//char <-> num
echo ord('A'); //65
echo chr(65); // A

//-------------------------------
//parse query string
$qs = 'lang=php&addr=172.30.1.42';
$arr =[];//얘 없어도 아래 $arr사용 가능
         //php에는 참조라고해서 parameter값을 넣는 곳에
         //&가 있으면 변수 선언을 해주지 않아도 된다
parse_str($qs,$arr); //&기준으로 나눠서 key=value로 파싱해줌
var_dump($arr);
/*
aray(2) {
  'lang' =>
  string(3) "php"
  'addr' =>
  string(11) "172.30.1.42"
}
*/
echo PHP_EOL;

//---------------------------------
//number format
echo number_format(12345678,3); //소수점 아래 3째자리까지 표시
echo PHP_EOL;

//---------------------------------
//case ; 대소문자
echo strtoupper('Hello').PHP_EOL; //전부 대문자로
echo strtolower('Hello').PHP_EOL; //전부 소문자로
echo PHP_EOL;

//---------------------------------
//remove spaces ; 양 옆에있는 공백을 없애준다
echo trim('  Hello, world    '); 
echo PHP_EOL;

//---------------------------------
//replace
// $trans = array('hello' => 'hi', 'hi'=>'hello');
$trans = [ 'hello' => 'hi',
           'hi'    => 'hello' ];
echo strtr('hi all, I said hello', $trans).PHP_EOL; //hello all, I said hi
echo strtr('hi all, I said hello', 'hi', 'hello').PHP_EOL;
//he all, I said hello
//hi를 hello로 바꾸는데 글자수가 넘어가면 그대로 출력 or 그냥 버림
echo strtr('Hello, world',[
    'Hello, world' => '안녕하세요'
]);