<?php
interface BaseStudent{
    function displayName();
}

class StudentImprove implements BaseStudent{
    private $name;
    private $title;
    private $age;
    function __construct($name, $title, $age = 0){
        $this->name = $name;
        $this->title = $title;
        $this->age = $age;
    }

    function displayName(){
        echo "Hello From " . $this->title . " " . $this->name . ". You are " . $this->age . " years old.";
    }

}

class Student implements BaseStudent{
    private $name;
    function __construct($name){
        $this->name = $name;
    }

    function displayName(){
        echo "Hello From " . $this->name;
    }
}

// class StudentManager {
//     function introduceStudent($name){
//         $student = new Student($name);
//         $student->displayName();
//     }
// }

class StudentManager {
    function introduceStudent(BaseStudent $student){
        $student ->displayName();
    }
}
$st = new Student("Jahidul Islam Sabuz");
$stm = new StudentImprove("Jahidul Islam Sabuz", "Mr", 24);
$sm = new StudentManager();
$sm->introduceStudent($stm);