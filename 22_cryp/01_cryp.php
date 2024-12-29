<?php
// Hashing
echo md5("Let There be Light"); // Hashing for string in MD5
echo PHP_EOL;
echo md5("Let There be Lights"); // Hashing for string in MD5
echo PHP_EOL;
echo sha1("Let There be Light"); // Hashing for string in SHA1
echo PHP_EOL;
print_r(hash_algos()); // Get all hashing algorithms
echo PHP_EOL;
echo hash("md2", "Let There be Light"); // Hashing for string in MD2
echo PHP_EOL;
echo bin2hex(mhash(MHASH_SHA512, "Let There be Light")); // Hashing for string in mhash