<?php
abstract class OurClass{
    final function doSomething(){
        echo "Doing Something\n";
    }

    abstract function sayHi();
}

class MyClass extends OurClass{
    function sayHi(){
        echo "Hi\n";
    } 
}

$myclass = new MyClass();
// $myclass->sayHi();
// $myclass->doSomething();

/****************************************************/
class ourClasss {
    final function doSomething(){
        echo "Doing Something\n";
    }
}

class MyClasss extends OurClasss{
    function sayHi(){
        echo "Hi\n";
    }
}

$myclasss = new MyClasss();
$myclass->sayHi();
$myclass->doSomething();
