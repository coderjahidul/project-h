<?php
// interface BaseAnimal{
//     function isAlive();
//     function canEat($param1, $param2);
//     function breed();
// }

// class Animal implements BaseAnimal{
//     public function isAlive(){
//         echo "I am alive \n";
//     }

//     public function canEat($param1, $param2){
//         echo "I can eat $param1 and $param2 \n";
//     }

//     public function breed(){
//         echo "I can breed \n";
//     }
// }
// interface BaseHuman extends BaseAnimal{
//     public function canWalk();
// }

// class Human implements BaseHuman{
//     public function isAlive(){
//         echo "I am alive \n";
//     }

//     public function canEat($param1, $param2){
//         echo "I can eat $param1 and $param2 \n";
//     }

//     public function breed(){
//         echo "I can breed \n";
//     }
//     public function canWalk(){
//         echo "I can walk \n";
//     }
// }

// $animal = new Human();
// echo $animal -> isAlive();
// echo $animal -> canEat("apple", "banana");
// echo $animal -> breed();
// echo $animal -> canWalk();

/************************************************************/
// interface Animal {
//     public function makeSound();
//     public function eat();
//     public function move();
// }

// // Implements the Animal interface
// class Dog implements Animal {
//     public function makeSound(){
//         echo "Woof! Woof! \n";
//     }

//     public function eat(){
//         echo "I am Eating \n";
//     }

//     public function move(){
//         echo "I am moving \n";
//     }

//     public function sleep(){
//         echo "I am sleeping \n";
//     }
// }

// class Cat implements Animal {
//     public function makeSound(){
//         echo "Meow! Meow! \n";
//     }

//     public function eat(){
//         echo "I am Eating \n";
//     }

//     public function move(){ 
//         echo "I am moving \n";
//     }

//     public function run(){
//         echo "I am running \n";
//     }
// }

// class Penguin extends Dog {
//     public function makeSound(){
//         echo "Quack! Quack! \n";
//     }

//     public function fly(){
//         echo "I can fly! \n";
//     }
// }

// $dog = new Dog();
// $cat = new Cat();

// $dog->makeSound();
// $dog->eat();
// $dog->move();
// $dog->sleep();
// echo PHP_EOL;

// $cat->makeSound();
// $cat->eat();
// $cat->move();
// $cat->run();

// echo PHP_EOL;

// $penguin = new Penguin();

// $penguin->makeSound();
// $penguin->eat();
// $penguin->move();
// $penguin->fly();

/***********************************************/

// Define interface
// interface Flyable {
//     public function fly();
// }

// interface Swimable {
//     public function swim();
// }

// // A class that implements both interfaces
// class Bird implements Flyable, Swimable {
//     public function fly(){
//         echo "I can fly! \n";
//     }

//     public function swim(){
//         echo "I can swim! \n";
//     }
// }

// // Using the Bird class
// $bird = new Bird();

// $bird->fly();
// $bird->swim();

/***********************************************/

// Parent interface
// interface Vehicle {
//     public function startEngine();
// }

// // Child interface
// interface ElectricVehicle extends Vehicle {
//     public function chargeBattery();
// }

// // Implementing the child interface
// class Tesla implements ElectricVehicle {
//     public function startEngine(){
//         echo "Engine started silently \n";
//     }

//     public function chargeBattery(){
//         echo "Battery Charging... \n";
//     }
// }

// // Using the Tesla class
// $tesla = new Tesla();
// $tesla->startEngine();
// $tesla->chargeBattery();

/***********************************************/
// Parent interface
interface Vehicle {
    public function startEngine();
}

// Child interface
interface ElectricVehicle extends Vehicle {
    public function chargeBattery();
}

// Child interface
interface HybridVehicle extends ElectricVehicle {
    public function batteryBackup();
}

// Implementing the child interfaces
class Tesla implements HybridVehicle {
    public function startEngine(){
        echo "Engine started silently \n";
    }

    public function chargeBattery(){
        echo "Battery Charging... \n";
    }

    public function batteryBackup(){
        echo "Battery backup is active \n";
    }
}

// Using the Tesla class
$tesla = new Tesla();
$tesla->startEngine();
$tesla->chargeBattery();
$tesla->batteryBackup();
