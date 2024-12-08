<?php 
// Define a class
class Human {
    public $name;
    function sayHi() {
        echo "Salam\n";
        $this->sayName();
        $this->sayAge();
    }

    private function sayName(){
        echo "My name is " . $this->name . "\n";
    }

    private function sayAge(){
        echo "My age is " . $this->age . "\n";
    }
}

// Define a class
class Cat{
    function sayHi() {
        echo "Meow\n";
    }
}

// Define a class
class Dog{
    function sayHi() {
        echo "Woof\n";
    }
}

// Define a class
class parson {
    function sayHi() {
        echo "Hello\n";
        $this->calculateBill();
    }
    private function calculateBill(){
        echo "Bill\n";
    }
}

// Call the oop object
$human = new Human();
$human2 = new Human();
$cat = new Cat();
$dog = new Dog();
$parson = new parson();

// set the name property
$human->name = "Jahidul Islam Sabuz";
$human2->name = "Siful Islam Shagor";

$human->age = 22;
$human2->age = 23;

// Call the function
$human->sayHi();
$human2->sayHi();
$parson->sayHi();
// $human->sayName();
// $human2->sayName();
// $cat->sayHi();
// $dog->sayHi();
