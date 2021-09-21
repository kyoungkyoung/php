<?php

// get file info from
$path = dirname(__DIR__, 2).'/README.md';

// case 1. from file handler
$fh = fopen($path, 'r');
var_dump(fstat($fh));

// case 2. from file name
var_dump(stat($path)); //파일의 status


// get file info detail
// size
filesize($path);
//modification time
filemtime($path);

// check file type
// link, directory, file인지 확인
var_dump(is_file($path));
