<?php

// base64 encode/decode
echo $base64Encode = base64_encode('hello');
echo base64_decode($base64Encode);

// get headers (as HTTP client)
var_dump(get_headers('http://example.com'));

//get meta tags
var_dump(get_meta_tags('http://example.com'));

// buid a query string
echo $queryString = http_build_query([
    'lang' => 'php',
    'message' => '어렵다'
]);

// parse URL
var_dump(parse_url('http://example.com?'.$queryString));

// url encode/decode
echo $urlEncoded = urlencode('안녕');
echo urldecode($urlEncoded);
