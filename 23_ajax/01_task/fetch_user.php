<?php
$userData = [
    'name' => 'Jahidul Islam',
    'email' => 'sobuz0349@gmail.com',
    'age' => 24
];

$result = json_encode($userData, JSON_PRETTY_PRINT);
print_r($result);
?>