<?php
require "vendor/autoload.php";
$redis = new Predis\Client();

// $redis->rpush("chatroom", "Jahidul: I am fine"); // Rpush key value
// $redis->rpush("chatroom", "Shajalal: I am also fine"); // Rpush key value
// $redis->rpush("chatroom", "Raisul: I am also fine"); // Rpush key value

// $redis->lpop("chatroom"); // Remove and get the first element
// $redis->rpop("chatroom"); // Remove and get the last element


//print_r($redis->lrange("chatroom", 0, -1)); // Lrange key start end

// $redis->set("user1", json_encode(["name" => "John", "age" => 30, "email" => "sobuz0349@gmail.com"]));
// $decode = json_decode($redis->get("user1"), true);
// print_r($decode);

// $redis->lPush('tasks', 'Task1');
// $redis->lPush('tasks', 'Task2');
// print_r($redis->lRange('tasks', 0, -1));

// $redis->sAdd('languages', 'PHP');
// $redis->sAdd('languages', 'Python');
// $redis->sAdd('languages', 'Java');
// $redis->sAdd('languages', 'C++');

// print_r($redis->sMembers('languages'));


// $redis->zAdd('scores', 90, 'Jahid');
// $redis->zAdd('scores', 80, 'Shajalal');
// $redis->zadd('scores', 70, 'Raisul');

// print_r($redis->zRange('scores', 0, -1, true));


$key = 'user_data';
if($redis->exists($key)){
    $data = ['name' => 'Jahidul', 'age' => 24];
    $redis->set($key, json_encode($data));
    $redis->expire($key, 20); // Expire key after 20 seconds
}else{
    $data = json_decode($redis->get($key), true);
}

print_r($data);
