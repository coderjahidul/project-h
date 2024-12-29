<?php
// HMAC
$message = "The quick brown fox jumps over the lazy dog.";
$key = "Some secret key";

print_r(hash_hmac_algos());
echo "\n";

$hash = hash_hmac("whirlpool", $message, $key);
echo $hash;