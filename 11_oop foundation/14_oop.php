<?php
class Student {
    private $name;
    private $age;
    private $class;

    function __construct($name = '', $age = '', $class = '') {
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    public function __get($property){
        return $this->$property;
    }

    public function __set($property, $value){
        $this->$property = $value;
    }


    // function getName() {
    //     return$this->name;
    // }
    // function setName($name){
    //     $this->name = $name;
    // }
    // function getAge() {
    //     return $this->age;
    // }
    // function setAge($age){
    //     $this->age = $age;
    // }
    // function getClass() {
    //     return $this->class;
    // }
    // function setClass($class){
    //     $this->class = $class;
    // }
}

$r = new Student("Jahidul Islam", 20, 10);
// $r->setName("Jahidul Islam");
$r -> name = "Mojahidul Islam";
echo $r->name;
// echo $r->age;
// echo $r->class;