<?php 
require "vendor/autoload.php";
// use Predis\Client;

// $client = new Client(); // Predis\Client
$redis = new Predis\Client(); // Predis\Client

// $redis->set("key", 10); // Set key to 10
// $redis->del("key"); // Delete key

// $redis->set("key", 100); // Set key to 100
// $redis->expire("key", 10); // Expire key after 10 seconds

// $redis->set("key", 102, "EX", 10); // Set key to 102 and expire after 10 seconds
//echo $redis->get("key"); // Get key

$redis->set("user1", json_encode(["name" => "John", "age" => 30, "email" => "sobuz0349@gmail.com"]));
// echo $redis->get("user1");
$redis_decode = json_decode($redis->get("user1"), true);
print_r($redis_decode);
