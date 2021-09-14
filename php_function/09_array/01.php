<?php
$blog = [
    'title'      => 'Lorem Ipsum',
    'categories' => [
        'all' => [
            [
                'title'   => 'What is Lorem Ipsum?',
                'content' => 'Lorem Ipsum is simply dumy text of the printing and type~~'
            ],
            [
                'title'   => 'Why do we use it?',
                'content' => 'Is is a lonh established fact that a reader will be distingush'
            ],
            [
                'title'   => 'Where does it come from?',
                'content' => 'Contrary to popular belief, Lorem Ipsum is not simply'
            ],
        ],
    ],
];


// push a element ----------------------------------
// 요소 추가
array_push($blog['categories']['all'],[
    'title'   => 'Laboris elit nulla dolor enim anim consequat nulla eu cillum esse.',
    'content' => 'Dolor nulla dolor est consequat nulla dolore pariatur in. Proident culpa nisi nostrud qui enim commodo qui tempor nostrud nostrud dolor. Ut do culpa consectetur sint amet pariatur sit Lorem duis. Eiusmod dolore id qui non occaecat veniam aute esse aute sit minim velit velit ut. Nisi tempor ullamco ad qui do ad occaecat aliquip aliqua.'
]);
var_dump($blog);


// delete a element ----------------------------------
// 마지막에 있는 요소가 제거된다
array_pop($blog['categories']['all']);
var_dump($blog);

// array_pop($blog['categories']['all']);
// var_dump($blog);


// filtering -----------------------------------------
// array에서 원하는 것만 찾기
var_dump(array_filter($blog['categories']['all'], function ($post){
    return $post['title'] == 'What is Lorem Ipsum?';
    //callback을 이용한다!!
    //return 값으로 $post의 'title'이 What is Lorem Ipsum? 인것을 찾아 return
}));

// validate key -------------------------------------
// array에 키가 있는지 확인
echo array_key_exists('title', $blog); //1 ; key가 있기 때문에 true -> 1을 return


// make an array from another array
var_dump(array_map(function ($post){
    return $post['title'];  // return된 배열중에 key값이 title 것만 return
}, $blog['categories']['all']));
/*
array(3) {
  [0] =>
  string(20) "What is Lorem Ipsum?"
  [1] =>
  string(17) "Why do we use it?"
  [2] =>
  string(24) "Where does it come from?"
}
*/


// find a key -------------------------------------
echo array_search('Lorem Ipsum', $blog); // title ; 'Lorem Ipsum'을 갖고 있는 key를 $blog에서 찾겠다
