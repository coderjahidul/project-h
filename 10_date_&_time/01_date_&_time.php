<?php
// set timezone function
date_default_timezone_set("Asia/Dhaka"); // set timezone
echo PHP_EOL;
// get timezone function
echo date_default_timezone_get();
echo PHP_EOL;
// // time function
// echo time();
// echo PHP_EOL;
// // microtime function
// echo microtime(true);
// echo PHP_EOL;
// var_dump(microtime(false));

$startTime = microtime(true);
factorial(100);
// sleep function
//sleep(3); // sleep this function for 3 seconds
$endTime = microtime(true);
$executionTime = $endTime - $startTime;
printf("%10.8f", $executionTime);

function factorial($n){
    $result = 1;
    for($i = 1; $i <= $n; $i++){
        $result *= $i;
    }
    return $result;
}
echo PHP_EOL;
// date function 
echo date('d/m/Y');
echo PHP_EOL;
echo date('z');