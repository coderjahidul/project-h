<?php
abstract class Bird{
    abstract function eat();
    abstract function sleep();
}

abstract class FlyingBird extends Bird{
    abstract function fly();
}

abstract class WalkingBird extends Bird{
    abstract function walk();
}

class BirdManager{
    function maintainBird(Bird $bird){
        $bird->eat();
        $bird->sleep();
    }

    function moveFlayingBird(FlyingBird $flyingBird){
        $flyingBird->fly();
    }

    function moveWalkingBird(WalkingBird $walkingBird){
        $walkingBird->walk();
    }
}

class Eagle extends FlyingBird{
    function eat(){
        echo "Eagle is eating\n";
    }
    function sleep(){
        echo "Eagle is sleeping\n";
    }
    function fly(){
        echo "Eagle is flying\n";
    }
}

class Penguin extends WalkingBird{
    function eat(){
        echo "Penguin is eating\n";
    }

    function sleep(){
        echo "Penguin is sleeping\n";
    }

    function walk(){
        echo "Penguin is walking\n";
    }
}

// Example 
$birdManager = new BirdManager();
$eagle = new Eagle();
$penguin = new Penguin();


$birdManager->maintainBird($eagle);
$birdManager->moveFlayingBird($eagle);
echo "\n";
$birdManager->maintainBird($penguin);
$birdManager->moveWalkingBird($penguin);