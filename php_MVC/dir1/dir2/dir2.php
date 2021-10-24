<?php

$root = dirname(__DIR__);
// var_dump($root);

//Directory
$dir = dir($root . '/dir2');
while($dirname = $dir->read()) {
    var_dump($dirname);
}

$dir = dir($root . '/dir2');
while($dirname = $dir->read()) {
    var_dump($dirname);
}