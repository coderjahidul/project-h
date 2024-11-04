<?php
// small letters array
$letar = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
// small letters ascii code
foreach ($letar as $value) {
    echo $value . " = " . ord($value) . "\n";
}
echo PHP_EOL;
// big letters array
$letar = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
// big letters ascii code
foreach ($letar as $value) {
    echo $value . " = " . ord($value) . "\n";
}
echo PHP_EOL;
echo PHP_EOL;
// show ascii code in string with chr function
for($i = 0; $i <= 255; $i++){
    echo $i . " = " . chr($i) . "\n";
}
