<?php 
// function scope(){
//     $value = 1;
//     $valueOne = 2;
//     $newValue = function($mark) use ($value, $valueOne) {
//         echo $value;
//         echo PHP_EOL;
//         echo $valueOne;
//         echo PHP_EOL;
//         echo $mark;
//         echo PHP_EOL;
//     };
//     $newValue(33);
// }

// $value = scope();

// $message = "Finding the answers to these questions isn’t difficult, but getting any kind of new tool set up can be time-consuming. And that can be a barrier to moving forward, even if you know it would be beneficial for your business.";

// $msg = function() use ($message){
//     var_dump($message);
// };

// $msg();

function message($data){
    $resultOne = 1;
    
    $msg = function($data) use (&$resultOne){
        echo $data;
        echo PHP_EOL;
        echo $resultOne;
        echo PHP_EOL;
        $resultOne = 2;
    };

    $msg($data);
    echo PHP_EOL;
    echo $resultOne;
}

message("Hello Grocoder");