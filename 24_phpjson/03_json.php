<?php 
$unicodeData = [
    "name" => "জাহিদুল ইসলাম",
    "email" => "sobuz0349@gmail.com",
    "age" => "২০"
];

// encode unicode data with JSON
$encodedUnicodeData = json_encode($unicodeData, JSON_UNESCAPED_UNICODE);
echo $encodedUnicodeData; 