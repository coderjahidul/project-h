<?php
$password = "Secret Password";
$hash1 = password_hash($password, PASSWORD_BCRYPT);
echo $hash1;
echo PHP_EOL;
$userinput = "Secret Password";

if(password_verify($userinput, $hash1)){
    echo "Password is correct";
}else{
    echo "Password is incorrect";
}