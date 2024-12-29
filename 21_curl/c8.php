<?php 
$ch = curl_init("https://postman-echo.com/headers");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'http-key: value',
    'http-long-key: hello world',
    'http-long-key2: hello world 2'
]);
$result = curl_exec($ch);
echo $result;

