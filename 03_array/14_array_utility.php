<?php
// array walk
$numbers = array(10, 20, 30, 40, 50, 60, 70, 80, 90, 100);
array_walk($numbers, function($value, $key){
    echo $key . " => " . $value . "\n";
});

// square function in array walk
function square($value){
    printf("Square of %d is %d \n", $value, $value * $value);
}
array_walk($numbers, "square");
printf("\n");
// divide function in array walk
function divide($value){
    printf("Divide of %d is %d \n", $value, $value / 2);
}
array_walk($numbers, "divide");

// array map function
function cube($value){
    return $value * $value * $value;
}
$new_array = array_map("cube", $numbers);
print_r($new_array);

// array filter function
function even($value){
    return $value % 3 == 0;
}

function odd($value){
    return $value % 3 == 1;
}

$evenNumber = array_filter($numbers, "even"); 
$oddNumber = array_filter($numbers, "odd");   
print_r($evenNumber);
print_r($oddNumber);

$student_list = array('salma', 'jahidul', 'sabbir', 'islam', 'rahman', 'rahim', 'yousuf', 'khandokar', 'sabuz', 'syed', 'syam');

function filterByS($student_list){
    return $student_list[0] == 's';
}

$new_student_list = array_filter($student_list, 'filterBys');
print_r($new_student_list);

$country_list = array('Bangladesh', 'India', 'Pakistan', 'Nepal', 'SriLanka', 'China', 'Japan', 'Australia', 'USA', 'UK', 'Afghanistan');

function filterByFristChar($country_list){
    return $country_list[0] == "A";
}

$new_country_list = array_filter($country_list, 'filterByFristChar');
print_r($new_country_list);