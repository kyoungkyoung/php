<?php 

// browser Cache
$file = __DIR__ . '/20_cache.php';

$lastModified = filemtime($file);
$etag = md5_file($file); // 캐시 담아두는 변수

header('Last-Modified: ' . gmdate('D, d M Y H:i:s', $lastModified) . 'GMT');
header('Etag: ' . $etag);

if(strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) === $lastModified){
    if($_SERVER['HTTP_IF_NONE_MATCH'] === $etag){
        header('HTTP/1.1 304 Not Modified');
        exit;
    }
} else {
    include __DIR__ .'/HelloWorld.php';
    
}