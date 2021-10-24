<?php

//php_user_filter

var_dump(dirname(__DIR__));

$fp = fopen(dirname(__DIR__). '/PHP_MVC/test01.txt', 'r');
stream_filter_append($fp, 'string.toupper');
var_dump(stream_get_contents($fp));
