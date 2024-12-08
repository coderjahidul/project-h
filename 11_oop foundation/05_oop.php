<?php 
// class Animal{
//     protected $name;

//     public function __construct($name = "No Name"){
//         $this->name = $name;
//     }
//     public function eat(){
//         echo "{$this->name} is Eating \n";
//     }

//     public function run(){
//         echo "{$this->name} is Running \n";
//     }

//     public function sleep(){
//         echo "{$this->name} is Sleeping \n";
//     }

//     public function greet(){} // Override Method
// }

// class Human extends Animal{
//     public function greet(){
//         echo "{$this->name} is Hi \n";
//     }
// }

// class Cat extends Animal{
//     public function greet(){
//         echo "{$this->name} isMeow \n";
//     }
// }

// echo "Human Bahavior \n";
// $human = new Human("Rasel");
// $human->eat();
// $human->run();
// $human->sleep();
// $human->greet();
// echo "\n";

// echo "Cat Bahavior \n";
// $cat = new Cat("Tom");
// $cat->eat();
// $cat->run();
// $cat->sleep();
// $cat->greet();
// echo "\n";



// class Info{
//     public function name(){
//         echo "Student Name: {$this->name}\n";
//     }

//     public function age(){
//         echo "Student Age: {$this->age}\n";
//     }

//     public function address(){
//         echo "Student Address: {$this->address}\n";
//     }
// }

// class Student extends Info{
//     public $name;
//     public $age;
//     public $address;

//     public function __construct($name = "Name Not Set", $age = 0, $address = "Address Not Set"){
//         $this->name = $name;
//         $this->age = $age;
//         $this->address = $address;
//     }
// }

// $student1 = new Student("Jahidul Islam Sabuz", 24, "Dhaka, Bangladesh");
// $student1->name();
// $student1->age();
// $student1->address();


class Animal{
    protected $name;
    public function __construct($name = "No Name"){
        $this->name = $name;
    }
    public function eat(){
        echo "{$this->name} is Eating \n";
    }

    public function run(){
        echo "{$this->name} is Running \n";
    }

    public function sleep(){
        echo "{$this->name} is Sleeping \n";
    }

    public function greet(){}
}

class Human extends Animal{
    public function greet(){
        echo "{$this->name} is Hi \n";
    }
}

class Cat extends Animal{
    public function greet(){
        echo "{$this->name} is Meow \n";
    }
}

$human = new Human("Rasel");
$human->eat();
$human->run();
$human->sleep();
$human->greet();
echo "\n";

$cat = new Cat("Tom");
$cat->eat();
$cat->run();
$cat->sleep();
$cat->greet();
echo "\n";

























































?>