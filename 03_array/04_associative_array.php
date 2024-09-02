<?php
// associative array
$student = array(
    "fname" => "Jahidul",
    "lname" => "Islam",
    "address" => "Cumilla",
    "age" => 22,
    "class" => "10",
    "section" => "A",
    "roll" => 11
);
// print_r($student);
// echo $student["fname"] . " " . $student["lname"];
// printf("%s %s", $student["fname"], $student["lname"]);

// array count
// echo count($student);

// echo join(", ", $student);

// associative array to convert string
// foreach($student as $key => $value){
//     echo $key . " => " . $value . ", ";
// }

// associative array to convert serialized
// foreach($student as $key => $value){
//     echo serialize($key) . " => " . serialize($value) . ", ";
// }

// associative array to convert serialized
// $serialize_data = serialize($student);
// $unserialize_data = unserialize($serialize_data); // Returns value is Array
// print_r($unserialize_data);
// echo "\n";

// associative array to convert json
// foreach($student as $key => $value){
//     echo json_encode($key) . " => " . json_encode($value) . ", ";
// }

// associative array to convert json
// $jsondata = json_encode($student);
// $json_decode = json_decode($jsondata); // Returns value is Object
// $json_decode = json_decode($jsondata, true); // Returns value is Array
// print_r($json_decode);


// associative array to convert xml
// $xml = new SimpleXMLElement('<data></data>');

// foreach($student as $key => $value){
//     $xml->addChild($key, $value);
// }
// echo $xml->asXML();

// associative array to serialize
// $serialize_data = serialize($student);
// echo $serialize_data;
// echo "\n";
// $unserialize_data = unserialize($serialize_data); // Returns value is Array
// print_r($unserialize_data);

// associative array to json
$json_encode = json_encode($student);
echo $json_encode;
echo "\n";
$json_decode = json_decode($json_encode); // Returns value is Object
print_r($json_decode);
echo "\n";
$json_decode_in_array = json_decode($json_encode, true); // Returns value is Array
print_r($json_decode_in_array);