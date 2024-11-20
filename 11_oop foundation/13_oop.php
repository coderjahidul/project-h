<?php 
// class A {
//     private $name;
//     protected static $number;
//     static function sayHi(){
//         echo self::$number = 12 . "\n";
//         echo "Hi From A \n";
//     }
// }

// class B extends A {
//     static function sayHi(){
//         echo "Hi From B \n";
//         parent::sayHi();
//         echo self::$number . "\n";
//     }
// }

// B::sayHi();


// class A {
//     static function sayHi(){
//         echo "Hi From A \n";
//     }
// }

// class B extends A {
//     static function sayHi(){
//         parent::sayHi();
//         echo "Hi From B \n";
//     }
// }

// B::sayHi();

// class A {
//     static $name = "Jahidul Islam Sabuz";
//     static function sayHi(){
//         echo "Hi, From A \n";
//     }

//     static function userAddress(){
//         echo "User Address: Dhaka, Bangladesh \n";
//     }

// }

// class B extends A {
//     static function sayHi(){
//         parent::sayHi();
//         echo "Hi, From B \n";
//         echo self::$name . "\n";
//         self::userAddress();
//     }
// }

// B::sayHi();


// define('NAME', "Jahidul Islam Sabuz");
// echo NAME . "\n";
// const ADDRESS = "Dhaka, Bangladesh";
// echo ADDRESS . "\n";
// const NAME = "Jahidul Islam Sabuz";
// echo NAME . "\n";

class MyClass {
    const NAME = "Jahidul Islam Sabuz";

    function sayHi(){
        echo "Hi," . self::NAME . "how are you" ;
    }
}


echo MyClass::NAME . "\n";















































?>