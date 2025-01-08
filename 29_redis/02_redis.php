<?php
require "vendor/autoload.php";

$redis = new Predis\Client();

// $redis->set("product_stock", 10); // Set key to 10
// echo $redis->get("product_stock"); // Get key 

// $redis->incr("product_stock"); // Increment key by 1
// $redis->incrby("product_stock", 10); // Increment key by 10

// $redis->decr("product_stock"); // Decrement key by 1
$redis->decrby("product_stock", 10); // Decrement key by 10

echo $redis->get("product_stock"); // Get key