<?php 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://localhost:82/project-h/21_curl/hello.php');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'secret=noodles');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$ver = curl_exec($ch);
echo strlen($ver);
?>