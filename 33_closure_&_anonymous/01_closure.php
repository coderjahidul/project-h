<?php 
// name function
function greet($name){
    echo "Hello $name \n";
}

// anonymous function
$greeter = function ($name){
    echo "Hello $name \n";
};

// another anonymous function
$greet = function ($name){
    echo "Hello $name \n";
};

$greeter("Jahidul Islam");
$greet("World");

$greeting = function ($name){
    printf("Hello %s\r\n", $name);
};

$greeting("Jahidul Islam");

$greeting("Rimi Khandoker");