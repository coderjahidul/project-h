<?php
require "vendor/autoload.php";
$redis = new Predis\Client();

// $redis->hset('car01', 'name', 'BMW'); // HSET key field value
// $redis->hset('car01', 'model', 'X5'); // HSET key field value
// $redis->hset('car01', 'color', 'black'); // HSET key field value

// echo $redis->hget('car01', 'name') . "\n"; // HGET key field
// echo $redis->hget('car01', 'model') . "\n"; // HGET key field
// echo $redis->hget('car01', 'color') . "\n"; // HGET key field

// $redis->hset('car01', 'color', 'blue'); // HSET key field value

// $redis->hdel('car01', 'color'); // Delete field

// $result = $redis->hgetall('car01'); // HGETALL key

$car = ['name' => 'BMW', 'model' => 'X5', 'color' => 'black'];
$redis->hmset('car01', $car); // HMSET key field value

$result = $redis->hgetall('car01');

print_r($result);