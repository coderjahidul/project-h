<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $message = $_POST['message'];

    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Phone: $phone <br>";
    echo "Address: $address <br>";
    echo "Message: $message <br>";
}else{
    echo "Invalid Request";
}