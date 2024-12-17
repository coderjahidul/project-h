<?php
// Singleton Design Pattern

class SomeClass{
    static $instance;
    private $name;

    function __construct($name){
        $this->name = $name;
        echo "New Instance Created \n";
    }

    static function getInstance($name=null){
        if(!self::$instance){
            if($name){
                self::$instance = new SomeClass($name);
            }else{
                self::$instance = new SomeClass('');
            }
        }else{
            echo "Old Instance Supplied \n";
        }

        return self::$instance;
    }

    function sayName(){
        echo $this->name . "\n";
    }
}

$sc1 = SomeClass::getInstance("Jahidul Islam");
$sc2 = SomeClass::getInstance("Nasim Uddin Emon");
$sc3 = SomeClass::getInstance("Siful Islam Shagor");
$sc1->sayName();
$sc2->sayName();
$sc3->sayName();