<?php 
$publickeyPath = __DIR__ . "/keys/public.pem";
$publicKey = openssl_get_publickey(file_get_contents($publickeyPath));
$message = "Hello World!";
openssl_public_encrypt($message, $encryptedMessage, $publicKey);

echo bin2hex($encryptedMessage);

echo "\n";
$privatekeyPath = __DIR__ . "/keys/private.pem";
$privateKey = openssl_get_privatekey(file_get_contents($privatekeyPath), "jahidul");
openssl_private_decrypt($encryptedMessage, $decryptedMessage, $privateKey);

echo $decryptedMessage;