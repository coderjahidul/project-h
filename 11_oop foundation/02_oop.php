<?php 
// // Define Human class
// class Human {
//     public $name;
//     public $age;

//     function __construct($parsonName = "Name Not Set", $parsonAge = 0){
//         echo "New Human Object is Created\n";
//         $this->name = $parsonName;
//         $this->age = $parsonAge;
//     }
//     function sayHi(){
//         echo "Salam\n";
//         $this->sayName();
//         $this->sayAge();
//     }

//     private function sayName(){
//         echo "My name is {$this->name}\n";
//     }

//     private function sayAge(){
//         if($this->age > 0){
//             echo "My age is {$this->age}\n";
//         }else {
//             echo "Age Not Set\n";
//         }
//     }
// }

// // Define Human object
// $human = new Human("Nasim Uddin Emon", 22);
// $human2 = new Human("Siful Islam Shagor", 28);
// $human3 = new Human("Jahidul Islam Sabuz");

// // set the name property
// // $human->name = "Jahidul Islam Sabuz";

// // Call the function
// $human->sayHi();
// $human2->sayHi();
// $human3->sayHi();



/****************************************************************** */
// Define Student class
class Student{
    public $name;
    public $age;
    public $address;
    public $roll;

    function __construct($studentName = "Name Not Set", $studentAge = 0, $studentAddress = "Address Not Set", $studentRoll = 0){
        $this->name = $studentName;
        $this->age = $studentAge;
        $this->address = $studentAddress;
        $this->roll = $studentRoll;
    }

    function studentDetails(){
        // echo "Student Name:  {$this->name}, Student Age:  {$this->age}, Student Address:  {$this->address} \n";
        $this->studentName();
        $this->studentAge();
        $this->studentAddress();
        $this->studentRoll();
    }

    private function studentName(){
        if($this->name == "Name Not Set"){
            echo "Student Name: Not Set\n";
        }else{
            echo "Student Name: {$this->name}\n";
        }
    }

    private function studentAge(){
        if($this->age > 0){
            echo "Student Age: {$this->age}\n";
        }else{
            echo "Student Age: Not Set\n";
        }
    }

    private function studentAddress(){
        if($this->address == "Address Not Set"){
            echo "Student Address: Not Set\n";
        }else{
            echo "Student Address: {$this->address}\n";
        }
    }

    private function studentRoll(){
        if($this->roll > 0){
            echo "Student Roll: {$this->roll}\n \n";
        }else{
            echo "Student Roll: Not Set\n \n";
        }
    }
}

// Define Student object
$student1 = new Student("Jahidul Islam Sabuz", 24, "Dhaka, Bangladesh");
$student2 = new Student("Siful Islam Shagor", 25, "Cumilla, Laksham");
$student3 = new Student("Nasim Uddin Emon", 22, "Laksham", 101);
$student4 = new Student();

// Call the function
$student1->studentDetails();
$student2->studentDetails();
$student3->studentDetails();
$student4->studentDetails();


























?>