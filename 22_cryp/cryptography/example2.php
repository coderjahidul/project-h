<?php 
require __DIR__ . '/vendor/autoload.php';
use phpseclib3\Crypt\RSA;
$message = "This is a secret message";

$rsa = new RSA();
$publicKey = __DIR__ . "/keys/id_rsa.pem";
$rsa->loadKey(file_get_contents($publicKey));
$encText = $rsa->encrypt($message);
echo bin2hex($encText);

$privateKey = __DIR__ . "/keys/id_rsa";
$rsa->loadKey(file_get_contents($privateKey));
$decText = $rsa->decrypt($encText);
echo $decText;