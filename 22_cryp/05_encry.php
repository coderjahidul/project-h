<?php 
//print_r(openssl_get_cipher_methods()); // Returns an array of cipher names
//print_r(openssl_get_cipher_methods(true)); // Returns an array of cipher names and their description

$iv_length = openssl_cipher_iv_length("aes-256-cbc"); // Returns the length of the initialization vector

$iv = openssl_random_pseudo_bytes($iv_length); // Returns a string of random bytes
//$rendom_dytes = bin2hex($iv); // Returns unencoded hex string

$message = "The quick brown fox jumps over the lazy dog."; // Message to encrypt
$password = "Secret Password"; // Password to encrypt with

$encryptedMessage = openssl_encrypt($message, 'aes-256-cbc', $password,0, $iv); // Encrypts the message

echo $encryptedMessage;
echo PHP_EOL;

$decryptedMessage = openssl_decrypt($encryptedMessage, 'aes-256-cbc', $password,0, $iv); // Decrypts the message

echo $decryptedMessage;












echo PHP_EOL;
echo PHP_EOL;
$ccmIvLength = openssl_cipher_iv_length("aes-128-ccm"); // Returns the length of the initialization vector

$ccmIv = openssl_random_pseudo_bytes($ccmIvLength); // Returns a string of random bytes
$encryptedMessageWithCcm = openssl_encrypt($message, 'aes-128-ccm', $password,0, $ccmIv, $tag); // Encrypts the message

echo $encryptedMessageWithCcm;
echo PHP_EOL;
$decryptedMessageWithCcm = openssl_decrypt($encryptedMessageWithCcm, 'aes-128-ccm', $password,0, $ccmIv, $tag); // Decrypts the message

echo $decryptedMessageWithCcm;
