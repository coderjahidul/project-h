<?php
// Only convert public properties to json
class Person{
    public $firstName;
    public $lastName;
    public $age;
    private $private;
}

$person = new Person();
$person->firstName = "Jahidul";
$person->lastName = "Islam";
$person->age = 22;
// $person->private = "secret";

// data is converted to json
$encodedData = json_encode($person);
echo $encodedData;

echo PHP_EOL;
// json is converted to object
$decodedData = json_decode($encodedData);
print_r($decodedData);

// json is converted to array
$decodedDataArray = json_decode($encodedData, true);
print_r($decodedDataArray);

