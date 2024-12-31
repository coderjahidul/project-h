<?php 
$text = "The quick brown fox jumps over the lazy dog.";
$encoded = base64_encode($text);
echo $encoded;
echo PHP_EOL;

$decoded = base64_decode($encoded);
echo $decoded;