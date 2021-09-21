<?php

//cURL ; client URL

//cURL handling
$ch = curl_init();

// set options(GET)
$queryString = http_build_query([
    'message' => 'Hello'
]);

curl_setopt($ch, CURLOPT_HTTPGET, true);
