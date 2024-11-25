<?php 
// include "spaceship.php";
// include "planet.php";
// include "bike.php";

// function __autoload($name){
//     if(!class_exists($name)){
//         include "{$name}.php";
//     }
// }

// function autoload($name){
//     if(strpos($name, "Planet_") !== false){
//         $filename = str_replace("Planet_", "", $name);
//         include strtolower("{$filename}.php");
//     }else{
//         include strtolower("{$name}.php");
//     }
// }

// spl_autoload_register("autoload");


// $spaceShip = new SpaceShip();
// echo $spaceShip->launch();
// (new Bike)->getType();
// echo "\n";
// (new Planet)->getName();
// echo "\n";
// (new SpaceShip)->launch();
// echo "\n";
// (new Planet_Mars)->getName();

function autoload($name){
    if(strpos($name, "Planet_") !== false){
        $filename = str_replace("Planet_", "", $name);
        include strtolower("{$filename}.php");
    }else{
        include strtolower("{$name}.php");
    }
}

spl_autoload_register("autoload");

(new SpaceShip)->launch();
echo "\n";
(new Bike)->getType();
echo "\n";
(new Planet)->getName();
echo "\n";
(new Planet_Mars)->getName();

















?>