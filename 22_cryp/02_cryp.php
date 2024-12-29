<?php 
// $password = "Secret Password";
// $hash = password_hash($password, PASSWORD_DEFAULT);
// echo $hash;

$password = "Secret Password";
$hash = md5($password);
// echo $hash;

// df02c6d2cc237b4ae8ab2aa04802ea76
$userinput = "Secret Password";
$hash = md5($userinput);
if($hash == "df02c6d2cc237b4ae8ab2aa04802ea76"){
    echo "Password is correct";
}else{
    echo "Password is incorrect";
}
echo PHP_EOL;
$hashone = "df02c6d2cc237b4ae8ab2aa04802ea76";
$hashtwo = "df02c6d2cc237b4ae8ab2aa04802ea76";
if(hash_equals($hashone, $hashtwo)){
    echo "Password is correct";
}else{
    echo "Password is incorrect";
}