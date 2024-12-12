<?php 
trait MyTrait {
    static $number;
    abstract function sayHi();
}

class MyClassA {
    use MyTrait;

    function sayHi(){
        echo "Hi\n";
    }
}

class MyClassB {
    use MyTrait;

    function sayHi(){
        echo "Hi++\n";
    }
}

MyClassA::$number = 12;
echo MyClassA::$number;

MyClassB::$number = 13;
echo MyClassB::$number;

$ma = new MyClassA();
$ma->sayHi();
echo $ma::$number;

$mb2 = new MyClassB();
$mb2->sayHi();
echo $mb2::$number;
?>