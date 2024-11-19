<?php
// Class Calculator
class Calculator {
    // Static Method
    public static function add($a, $b){
        return $a + $b;
    }

    public static function substract($a, $b){
        return $a - $b;
    }

    public static function multiply($a, $b){
        return $a * $b;
    }

    public static function divide($a, $b){
        return $a / $b;
    }
}

// call Static method without creating an instance
// echo Calculator::add(10, 20) . "\n";
// echo Calculator::substract(10, 20) . "\n";
// echo Calculator::multiply(10, 20) . "\n";
// echo Calculator::divide(10, 20) . "\n";


/*****************************************************************************/
class Counter {
    private static $count = 0;

    public static function increment(){
        self::$count++;
    }

    public static function getCount(){
        return self::$count;
    }
}

// Using static Method to manipulate a static property
// Counter::increment();
// Counter::increment();
// Counter::increment();
// echo Counter::getCount();


/*****************************************************************************/
class Greeting {
    public static function sayHello(){
        echo "Hello from a Static Method \n";
    }

    public function sayHi(){
        echo "Hi from a Non-Static Method \n";
    }
}

// Call Static Method without creating an instance
// Greeting::sayHello(); // Hello from a Static Method

// // Call Non-Static Method without creating an instance
// $greeting = new Greeting();
// $greeting->sayHi(); // Hi from a Non-Static Method

/******************************************************************************/
class Base {
    public static function whoAmI(){
        echo "I am a Base Class \n";
    }
}

class Derived extends Base {
    public static function whoAmI(){
        echo "I am a Derived Class \n";
    }
}

// Call static method
// Base::whoAmI(); // I am a Base Class
//Derived::whoAmI(); // I am a Derived Class

/******************************************************************************/
class ParentClass {
    public static function who(){
        echo "I am a Parent Class \n";
    }

    public static function callWho(){
        static::who(); // Late Static Binding
    }
}

class ChildClass extends ParentClass {
    public static function who(){
        echo "I am a Child Class \n";
    }
}

// Late static binding example
// ParentClass::callwho(); // I am a Parent Class
// ChildClass::callwho(); // I am a Child Class


/*******************************************************************************/
class MathCalculator {
    private $number;
    static $name;
    static function fibonacci($n){
        self::$name = "Jahidul Islam";
        echo "Fibonacci Series up to {$n} name is " . self::$name . " \n";
    }

    function factorial($n){
        self::$name = "Sabuz";
        $this->number = 12;
        echo self::$name . " Calculating Factorial of " . ($n + $this->number) . "\n";
    }
}

$mathe = new MathCalculator();
$mathe->fibonacci(10);
echo $mathe->factorial(15) . "\n";

// call static method without creating an instance
MathCalculator::fibonacci(10) . "\n";
