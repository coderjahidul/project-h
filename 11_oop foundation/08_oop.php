<?php
abstract class Shape {
    abstract function getArea();
    abstract function getPerimeter();
}

class Rectangle extends Shape {
    private $base, $height;

    function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }

    public function setBase($base){
        $this->base = $base;
    }

    public function setHeight($height){
        $this->height = $height;
    }

    public function getArea(){
        return $this->base * $this->height;
    }

    public function getPerimeter(){
        return 2 * ($this->base + $this->height);
    }
}

class Triangle extends Rectangle {
    private $base, $height;

    function __construct($base, $height){
        $this->base = $base;
        $this->height = $height;
    }
    public function getArea(){
        return 0.5 * $this->base * $this->height;
    }

    public function getPerimeter(){
        return $this->base + $this->height + sqrt($this->base * $this->base + $this->height * $this->height);
    }
}

$rectangle = new Rectangle(10, 5);
// echo $rectangle->getArea();
// echo "\n";
// echo $rectangle->getPerimeter();

// echo PHP_EOL;

$triangle = new Triangle(10, 5);
// echo $triangle->getArea();
// echo "\n";
// echo $triangle->getPerimeter();


/****************************************************/
abstract class OurClass{
    public function sayHi(){
        echo "Hi From Our Class\n";
    }
    
    abstract function eat();
}

class MyClass extends OurClass{
    public function eat(){
        echo "I am eating\n";
    }
}

$myclass = new MyClass();
// $myclass->sayHi();
// $myclass->eat();

/****************************************************/
// Abstract Class
abstract class Animal{
    // Abstract Method (no Implementation)
    abstract function makeSound();

    // Concrete Method (with implementation)
    public function sleep(){
        echo "I am sleeping\n";
    }
}

// Derived Class 1
class Dog extends Animal{
    public function makeSound(){
        echo "Woof! Woof! \n";
    }
}

// Derived Class 2
class Cat extends Animal{
    public function makeSound(){
        echo "Meow! Meow! \n";
    }
}

// Derived Class 3
class Horse extends Animal{
    public function makeSound(){
        echo "Neigh! Neigh! \n";
    }
}

// Creating Objects
$dog = new Dog();
// Calling Methods
$dog->makeSound();
$dog->sleep();

echo PHP_EOL;

// Creating Objects
$cat = new Cat();
// Calling Methods
$cat->makeSound();
$cat->sleep();

echo PHP_EOL;

// Creating Objects
$horse = new Horse();
// Calling Methods    
$horse->makeSound();
$horse->sleep();