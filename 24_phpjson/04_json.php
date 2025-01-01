<?php
// $json = '{"name":"জাহিদুল ইসলাম"}'; // Valid way of json
// $json = "{'name':'জাহিদুল ইসলাম'}"; // Invalid way of json
$json = "{\"name\":\"জাহিদুল ইসলাম\"}"; // Valid way of json

$unicodeData = json_decode($json, 1);
print_r($unicodeData);
echo json_last_error_msg();