<?php
// class Shape{
//     protected $name;
//     protected $area;

//     public function __construct($name){
//         $this->name = $name;
//         $this->calculateArea();
//     }

//     public function getArea(){
//         echo "Area of {$this->name}: {$this->area}\n";
//     }

//     public function calculateArea(){}
// }

// class Triangle extends Shape{
//     private $a, $b, $c;
//     public function __construct($a, $b, $c){
//         $this->a = $a;
//         $this->b = $b;
//         $this->c = $c;
//         parent::__construct("Triangle");
//     }

//     public function calculateArea(){
//         $perimeter = ($this->a + $this->b + $this->c) / 2;
//         $this->area = sqrt($perimeter * ($perimeter - $this->a) * ($perimeter - $this->b) * ($perimeter - $this->c));

//     }
// }

// class Rectangle extends Shape{
//     private $a, $b;
//     public function __construct( $a, $b){
//         $this->a = $a;
//         $this->b = $b;
//         parent::__construct("Rectangle");
//     }

//     public function calculateArea(){
//         $this->area = $this->a * $this->b;     
//     }
// }

// $triangle = new Triangle(3, 4, 5);
// $triangle->getArea();

// $rectangle = new Rectangle(2, 4);
// $rectangle->getArea();

// Inheritance
// Base class
// class Animal{
//     public function makeSound(){
//         echo "Some generic animal sound. \n";
//     }
// }

// // Derived class
// class Dog extends Animal{
//     public function makeSound(){
//         echo "Woof! Woof! \n";
//     }
// }

// // Derived class
// class Cat extends Animal{
//     public function makeSound(){
//         echo "Meow! Meow! \n";
//     }
// }

// // Creating object
// $animal = new Animal();
// $dog = new Dog();
// $cat = new Cat();

// // Calling method
// $animal->makeSound();
// $dog->makeSound();
// $cat->makeSound();



// Inheritance
// Base class
// class Animal {
//     public $name;
//     public $color;

//     public function __construct($name, $color){
//         $this->name = $name;
//         $this->color = $color;
//     }

//     public function describe(){
//         return "This is a {$this->color} {$this->name}.";
//     }
// }

// // Derived class (inherits from Animal)
// class Dog extends Animal {
//     public $breed;

//     public function __construct($name, $color, $breed){
//         // Call the parent constructor
//         parent::__construct($name, $color);
//         $this->breed = $breed;
//     }

//     // New method specific to Dog class
//     public function bark(){
//         return "Woof! Woof!";
//     }

//     // Override the describe() method
//     public function describe(){
//         return parent::describe() . " It is a {$this->breed}.";
//     }
// }

// $dog = new Dog("dog", "Brown", "Labrador");
// echo $dog->describe();
// echo "\n";
// echo $dog->bark();


/*************************************************************/
class Vehicle {
    public $type = "Generic vehicle";
    public function describe(){
        echo "This is a {$this->type}.";
    }
}

// Derived class (inherits from Vehicle)
class Car extends Vehicle {
    public $type = "Car";
}

// Using the Class
$vehicle = new Vehicle();
$car = new Car();

// $vehicle->describe();
// echo "\n";
// $car->describe();


/*****************************************************/

// Base class
class Bird {
    public function fly(){
        echo "I can fly! \n";
    }
}

// Derived class (inherits from Bird)
class Penguin extends Bird {
    public function fly(){
        echo "I cannot fly, but I can swim! \n";
    }
}

// Derived class (inherits from Dog)
class Dog extends Penguin {
    public function fly(){
        echo "I cannot fly, But I can bark! \n";
    }
}

// Using the Class
$bird = new Bird();
$penguin = new Penguin();
$dog = new Dog();

// $bird->fly();
// $penguin->fly();
// $dog->fly();


/**********************************************************/
// Base class
class parentClass {
    public function sayHello(){
        echo "Hello from Parent Class \n";
    }
}

// Derived class (inherits from parentClass)
class ChildClass extends parentClass {
    public function sayHello(){
        echo "Hello from Child Class \n";
        parent::sayHello(); // call the parent class method
    }
}

// Derived class (inherits from ChildClass)
class ChildOne extends ChildClass {
    public function sayHello(){
        echo "Hello from Child One Class \n";
        parent::sayHello(); // call the parent class method
    }
}

// Using the Class
$parent = new parentClass();
// $parent->sayHello();
// echo PHP_EOL;
$child = new ChildClass();
// $child->sayHello();
// echo PHP_EOL;
$childOne = new ChildOne();
// $childOne->sayHello();


/********************************************************/
// Base class
class Person {
    public $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function greet(){
        echo "Hi, I'm {$this->name}.";
    }
}

// Derived class (inherits from Person)
class Employee extends Person {
    public $jobTitle; // new property

    public function __construct($name, $jobTitle){
        parent::__construct($name); // call the parent class constructor
        $this->jobTitle = $jobTitle;
    }

    public function greet(){
        echo "Hi, I'm {$this->name}, and I work as a {$this->jobTitle}."; // override the parent class method
    }
}

// Derived class (inherits from Person)
class Student extends Person {
    public $class; // new property
    public $rollNumber;

    public function __construct($name, $class, $rollNumber){
        parent::__construct($name); // call the parent class constructor
        $this->class = $class;
        $this->rollNumber = $rollNumber;
    }

    public function greet(){
        echo "Hi, I'm {$this->name}, and I'm in class {$this->class}, and my roll number is {$this->rollNumber}.";
    }
}

// Using the Class
$employee = new Employee("Jahidul Islam", "Web Developer");
$employee->greet();

echo PHP_EOL;

$student = new Student("Nasim Uddin", "10", "101");
$student->greet();