<?php
require 'vendor/autoload.php';
use Predis\Client;
$redis = new Client();

if(isset($_POST['message'])){
    $sender = $_POST['sender'];
    $message = $_POST['message'];
    $redis->rpush("chatroom-002", $sender . ": " . $message);
    // $message = $redis->lrange("chatroom-001", 0, -1);
    $message = $redis->lrange('chatroom-002', 0, $redis->llen('chatroom-002'));
    echo "<p>";
    foreach($message as $msg){
        echo $msg . "<br/>";
    }
    echo "</p>";
};

if(isset($_POST['refresh'])){
    $message = $redis->lrange('chatroom-002', 0, $redis->llen('chatroom-002'));
    echo "<p>";
    foreach($message as $msg){
        echo $msg . "<br/>";
    }
    echo "</p>";
}