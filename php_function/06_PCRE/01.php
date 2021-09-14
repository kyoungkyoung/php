<?php
// 정규표현식
// string match (regex) -----------------------
// case 1. preg_match
// /^()$/ ; // - 슬래쉬 2개가 정규표현식이라는 뜻, ^ - 문자열의 시작, $ - 문자열의 끝, () - 그룹을 지어줌(일반화를 위해)
preg_match('/^(https?\:)\/\/(.*)(\..*)$/','http://example.com', $matches); //어떠한 특정 문자열이 패턴에 맞는지를 보는 것
            // s? - s가 올수도 있고 안올수도 있고, \ - escape, . - 문자하나, * - 모든것
var_dump($matches);


// case 2. preg_match_all
$html = <<<'HTML'
<section>
    <h1>Lorem Ipsum</h1>
    <article>
        <h2>What is Lorem Ipsum?</h2>
</article>
</section>
HTML;
//[] - 범위를 지정해준다, \\ - 역참조
preg_match_all('/<(h[1-6])>(.*)<\/\\1>/', $html, $matches);
//                              1번째 그룹이 그대로 들어온다
var_dump($matches);

/*
array(3) {
  [0] =>
  array(2) {
    [0] =>
    string(20) "<h1>Lorem Ipsum</h1>"
    [1] =>
    string(29) "<h2>What is Lorem Ipsum?</h2>"
  }
  [1] =>
  array(2) {
    [0] =>
    string(2) "h1"
    [1] =>
    string(2) "h2"
  }
  [2] =>
  array(2) {
    [0] =>
    string(11) "Lorem Ipsum"
    [1] =>
    string(20) "What is Lorem Ipsum?"
  }
}
*/

// replace --------------------------
// echo preg_replace('/^(.*)@(.*)$/','http://$2?user=$1', 'wkjang4@gmail.com'); //str_replace()와 비슷
//$1 = 1번째 그룹, $2 = 2번째 그룹

echo preg_filter('/^(.*)@(.*)$/','http://$2?user=$1', 'wkjang4@gmail.com'); //str_replace()와 비슷

// filter ---------------------------
var_dump(preg_grep('/^(.*)@(.*)$/',[
    'php://stdout',
    'wkjang4@gmail.com'
]));//배열에서 패턴에 맞는것만 찾아준다
/*
array(1) {
  [1] =>
  string(17) "wkjang4@gmail.com"
}
*/

// escape regex string ------------------------
echo preg_quote('^().*$?:[]'); //일반문자열에서 escape시켜주기
// \^\(\)\.\*\$\?\:\[\]

// split -----------------------------
          // \s = space, tab같은 공백, [] = 범위 지정
var_dump(preg_split('/[\s,]+/', 'hypertext language, programing'));
        // 공백이나(또는) ,가오면 나눠준다
/*
array(3) {
  [0] =>
  string(9) "hypertext"
  [1] =>
  string(8) "language"
  [2] =>
  string(10) "programing"
}
*/


// preg_replace_callback
echo preg_replace_callback(
    '/^(.*)@(.*)$/',
    function ($matches){
        [,$username, $domain] = $matches; //비구조화
        // $matches = [,$username, $domain]; //이렇게하면 error ; $matches를 나중에 써줘야한다
        return 'http://'.$domain.'?username='.$username;
        // var_dump($matches);
    },
    'wkjang4@gmail.com'
);