<?php 
// $name_one = "Jahidul";
// $name_two = "Islam";
// var_dump($name_one, $name_two);

// $name = "Earth";
// $uname = strtoupper($name);
// echo 'We\'ar living in: ' . $uname . "\n";

// printf("we'ar living in %s", $name);
// echo "\n";

// $fname = "Jahidul";
// $lname = "Islam";
// printf("His %s Name is %s %s","Full", $fname, $lname);

// $name = array(1,2, array("a","b","c"));
// var_dump($name);

// $b = 3.1;
// $c = true;
// var_dump($b, $c);

// $a = "Hello";
// $a .= " World";
// $b = $a;

// debug_zval_dump($a);

// $name = array(1,2, array("a","b","c"));
// var_export($name);

// $b = 3.1;
// $v = var_export($b, true);
// echo $v;

// function var_dump_pre($mixed = null){
//     echo "<pre>";
//     var_dump($mixed);
//     echo "</pre>";
//     return null;
// }

// $data = array("apple", "banana", "orange");
// var_dump_pre($data);


// function var_ret($mixed = null){
//     ob_start();
//     var_dump($mixed);
//     $content = ob_get_contents();
//     ob_end_clean();
//     return $content;
// }
// $data = array("apple", "banana", "orange");
// $result = var_ret($data);
// echo $result;

// $fname = "Jahidul Islam";
// $lname = "Sabuz";
// printf("His First Name Is %s And Last Name Is %s", $fname, $lname);
// echo "\n";
// $permanent_address = "Cumill, Laksham";
// $present_address = "Dhaka, Uttora";

// printf("His Premanent Address is %s And Present Address is %s", $permanent_address, $present_address);
// echo "\n";

// $name = "Jahidul Islam Sabuz";
// $profation = "Web Developer";
// printf("His Name is %s, And His Profition Is %s.", $name, $profation);
// echo "\n";

// $student_name = "Imtais Ahamad Rifat";
// $student_address = "Cumilla, Laksham";
// printf("Student Name Is %s. And Student Address Is %s.", $student_name, $student_address);

// $number = 12;
// $number = $number + 13;
// echo $number;

// $number = 12;
// $number += 13;
// echo $number;

// $number = (13 - 5) * 6;
// echo $number;

// $number = 11;
// $number++;
// $number++;
// $number++;
// echo $number;
// $x = $y = 5;
// echo $x . "\n";
// echo $y . "\n";
// $decimal = array(0,1,2,3,4,5,6,7,8,9);
// $decimal = [0,1,2,3,4,5,6,7,8,9];

// echo $decimal[2];
// foreach($decimal as $number){
//     echo "This Number is : " . $number . "\n";
// }

// $decimal_number = [0,1,2,3,4,5,6,7,8,9];
// echo $decimal_number;

// $binary_number = "0010";
// $decimal_number = bindec($binary_number);

// echo "Binary Number: " . $binary_number . "\n";
// echo "Decimal Number: " . $decimal_number . "\n";


// $n = 12;
// $o = 017;
// $h = 0x1D;
// printf("The Number is %d and %d and %d", $n, $o,$h);

// $o = 01641427677;
// printf("The binary equivalent of %d is %b", $o, $o);
// echo "\n";
// printf("The hexadecimal equivalent of %d is %X", $o, $o);
// echo "\n";
// printf("The Octal equivalent of %d is %o", 27, 27);

// $b = 12145;

// printf("The bunary equivalent of %d and %b",$b, $b);
// echo "\n";
// printf("The hexadecimal equivalent of %d and %X", $b, $b);
// echo "\n";
// printf("The octal equivalent of %d and %o", $b, $b);


// $randomNumber = rand(); // Generate a random integer (not cryptographically secure)
// echo $randomNumber;
// $jahidul = "120";
// echo "\n";
// $fname = "islam";
// $lname = "jahidul";
// $address = "laksham";
// printf('His name is %2$s %1$s and his address is %3$s', $fname, $lname, $address);
// echo "\n";
// $one = 1200;
// printf('The binary equivalent of %1$d is %1$b', $one);

// echo "\n";
// $n = 38.127;
// printf("%.2f", $n);
// echo "\n";
// $m = 120.135;
// printf("%.2f", $m);
// echo "\n";

// $a = "120.145";
// $b = "27.129";
// printf("%07.2f \n", $a);
// printf("%07.2f \n", $b);

// $fname = "islam";
// $lname = "jahidul";
// $address = "laksham";
// printf('His name is %2$s %1$s and his address is %3$s', $fname, $lname, $address);
// echo "\n";
// $number = 15;
// printf('The binary equivalent of %1$d is %1$b', $number);

// $n = 38.128;
// printf("%.2f", $n);
// $m = 125.326;
// printf("%.2f", $m);

// $a = 120.145;
// $b = 27.129;
// printf("%07.2f \n", $a);
// printf("%07.2f \n", $b);


// class calculation{
//     public $a, $b, $c;

//     function sum(){
//         $this->c = $this->b + $this->a;
//         return $this->c;
//     }
//     function sub(){
//         $this->c = $this->b - $this->a;
//         return $this->c;
//     }
//     function mul(){
//         $this->c = $this->b * $this->a;
//         return $this->c;
//     }
//     function div(){
//         $this->c = $this->b / $this->a;
//         return $this->c;
//     }
// }

// $c1 = new calculation();
// $c1->a = 10;
// $c1->b = 20;

// echo $c1->div();

// class calculation{
//     public $a, $b, $c;

//     function sum(){
//         $this->c = $this->b + $this->a;
//         return $this->c;
//     }
//     function sub(){
//         $this->c = $this->b - $this->a;
//         return $this->c;
//     }
//     function mul(){
//         $this->c = $this->b * $this->a;
//         return $this->c;
//     }
//     function div(){
//         $this->c = $this->b / $this->a;
//         return $this->c;
//     }
// }

// $c1 = new calculation();
// $c1->a = 20;
// $c1->b = 30;

// $c2 = new calculation();
// $c2->a = 10;
// $c2->b = 20;

// $c3 = new calculation();
// $c3->a = 5;
// $c3->b = 3;

// $c4 = new calculation();
// $c4->a = 5;
// $c4->b = 20;

// echo "Sum Value: " . $c1->sum() . " Sub Value: " . $c2->sub() . " Mul Value: " . $c3->mul() . " Div Value: " . $c4->div();

// class calculation{
//     public $a, $b, $c;

//     function sum(){
//         $this->c = $this->b + $this->a;
//         return $this->c;
//     }
//     function sub(){
//         $this->c = $this->b - $this->a;
//         return $this->c;
//     }
//     function mul(){
//         $this->c = $this->b * $this->a;
//         return $this->c;
//     }
//     function div(){
//         $this->c = $this->b / $this->a;
//         return $this->c;
//     }
// }

// $c1 = new calculation();
// $c1->a = 20;
// $c1->b = 10;

// $c2 = new calculation();
// $c2->a = 20;
// $c2->b = 50;

// $c3 = new calculation();
// $c3->a = 5;
// $c3->b = 7;

// $c4 = new calculation();
// $c4->a = 5;
// $c4->b = 45;

// echo "Sum Value: " . $c1->sum() . " Sub Value: " . $c2->sub() . " Mul Value: " . $c3->mul() . " Div Value: " . $c4->div();

// class employee{
//     public $name;
//     public $age;
//     public $address;
//     public $salary;

//     function __construct($name = "No Name", $age = 0, $address = "No Address", $salary = 0){
//         $this->name = $name;
//         $this->age = $age;
//         $this->address = $address;
//         $this->salary = $salary = $salary;
//     }
//     function info(){
//         echo "<h3>Employee Information</h3>" . "\n";
//         echo "Employee Name: " . $this->name . "\n";
//         echo "Employee Age: " . $this->age . "\n";
//         echo "Employee Address: " . $this->address . "\n";
//         echo "Employee Salary: " . $this->salary . "\n" . "\n";
//     }
// }
// class manager extends employee{
//     public $travel_allowance = 1000;
//     public $phone_bill = 500;
//     public $total_salary;

//     function info(){
//         $this->total_salary = $this->salary + $this->travel_allowance + $this->phone_bill;

//         echo "<h3>Manager Information </h3>" . "\n";
//         echo "Manager Name: " . $this->name . "\n";
//         echo "Manager Age: " . $this->age . "\n";
//         echo "Manager Address: " . $this->address . "\n";
//         echo "Manager Salary: " . $this->total_salary . "\n" . "\n";
//     }
// }

// $employee1 = new employee("Jahidul Islam", 20, "Cumilla, Laksham", 12000);
// $employee2 = new manager("Najmul Hossain", 20, "Dhaka", 50000);

// $employee1->info();
// $employee2->info();

// php oop access modifire

// class base{
//     private $name;
//     public function __construct($name){
//         $this->name = $name;
//     }
//     protected function show(){
//         echo "Your Name: " . $this->name . "\n";
//     }
// }
// class drived extends base{
//     public function get(){
//         echo "Your Name: " . $this->name . "\n";
//     }
// }
 
// $test = new drived("jahidul islam sabuz");



// $test->name = "najmul hossain";

// $test->get();


// class student{
//     //properties
//     public $name;
//     public $age;

//     //methods
//     function set_name($name){
//         $this->name = $name;
//     }
//     function set_age($age){
//         $this->age = $age;
//     }

//     function get_name(){
//         return $this->name;
//     }
//     function get_age(){
//         return $this->age;
//     }
// }

// $student = new student();
// $student->set_name('Jahidul Islam Sabuz');
// $student->set_age(24);

// echo "Name: " . $student->get_name();
// echo "Age: " . $student->get_age();


// class student{
//     public $name;
//     public $age;

//     function __construct($name = "No Name", $age = 0){
//         $this->name = $name;
//         $this->age = $age;
//     }

//     function info(){
//         echo "Student Name: " . $this->name . "\n";
//         echo "Student Age: " . $this->age . "\n";
//     }
// }

// $student1 = new student("Jahidul Islam Sabuz", 24);
// $student1->info();

// class student{
//     public $name;
//     public $age;
//     public $address;

//     function __construct($name = "No Name", $age = 0, $address = "No Address"){
//         $this->name = $name;
//         $this->age = $age;
//         $this->address = $address;
//     }
//     function __destruct(){
//         echo "Student Name: " . $this->name . "\n";
//         echo "Student Age: " . $this->age . "\n";
//         echo "Student Address: " . $this->address . "\n" . "\n";
//     }
// }

// $student1 = new student("Jahidul Islam Sabuz", 23, "Dhaka, Bangladesh");
// $student2 = new student("Siful Islam Shagor", 25, "Cumilla, Laksham");
// $student3 = new student("Nasim Uddin Emon", 22, "Laksham");

// class employee{
//     public $name;
//     public $age;
//     public $address;
//     public $salary;
    
//     function __construct($name = "No Name", $age = 0, $address = "No Address", $salary = 0){
//         $this->name = $name;
//         $this->age = $age;
//         $this->address = $address;
//         $this->salary = $salary;
//     }

//     function __destruct(){
//         echo "Employee Name: " . $this->name . "\n";
//         echo "Employee Age: " . $this->age . "\n";
//         echo "Employee Address: " . $this->address . "\n";
//         echo "Employee Salary: " . $this->salary . "\n" . "\n";
//     }
// }

// $employee1 = new employee("Jahidul Islam Sabuz", 23, "Dhaka, Bangladesh", 50000);
// $employee2 = new employee("Siful Islam Shagor", 25, "Cumilla, Laksham", 6000);
// $employee3 = new employee("Nasim Uddin Emon", 22, "Laksham", 5000);


// class Fruit{
//     public $name;
//     protected $color;
//     private $weight;

//     function set_name($name){
//         $this->name = $name;
//     }
//     function set_color(){
//         $this->color = $color;
//     }
//     function set_weight(){
//         $this->weight = $weight;
//     }

//     function get_name(){
//         echo "The name of the fruit is: " . $this->name . "\n";
//     }
//     function get_color(){
//         echo "The color of the fruit is: " . $this->color . "\n";
//     }
//     function get_weight(){
//         echo "The weight of the fruit is: " . $this->weight . "\n";
//     }
// }
// $mango = new Fruit();
// $mango->name = "Mango";
// $mango->color = "Yellow";
// $mango->weight = "300";

// $mango->get_name();
// $mango->get_color();
// $mango->get_weight();

// protected
// class base{
//     protected $name;

//     public function __construct($name){
//         $this->name = $name;
//     }
//     protected function show(){
//         echo "Your Name: " . $this->name . "\n";
//     }
// }

// class derived extends base{
//     public function get(){
//         echo "Your Name: " . $this->name . "\n";
//     }
// }
// $test = new derived("jahidul islam");
// // $test->name = "najmul hossain";
// $test->get();

// Public function
// class MyClass{
//     public function myPublicFunction(){
//         echo "This is a public function.\n";
//     }
// }
// $obj = new MyClass();
// $obj ->mypublicFunction();


// Protected function
// class MyClass {
//     protected function myProtectedFunction(){
//         echo "This is a protected function.\n";
//     }
// }
// $obj = new MyClass();
// // $obj->myProtectedFunction();

// class MySubClass extends MyClass {
//     public function callProtectedFunction(){
//         $this->myProtectedFunction();
//     }
// }

// $subObj = new MysubClass();
// $subObj->callProtectedFunction();

// class MyClass {
//     protected function myProtectedFunction(){
//         echo "This is a protected function.\n";
//     }
// }

// class MySubClass extends MyClass {
//     public function callProtectedFunction(){
//         $this->myProtectedFunction();
//     }
// }
// $subObj = new MySubClass();
// $subObj->callProtectedFunction();


// private function 
// class MyClass{
//     private function myPrivateFunction(){
//         echo "This is a private function.\n";
//     }
//     public function callPrivateFunction(){
//         $this->myPrivateFunction();
//     }
// }

// $obj = new MyClass();
// $obj->callPrivateFunction();


// Public Function 
// class MyClass {
//     public function myPublicFunction(){
//         echo "This is a public function. \n";
//     }
// }
// $obj = new MyClass();
// $obj->myPublicFunction();

// Protected
// class MyClass{
//     protected function MyProtectedFunction(){
//         echo "This is a protected function. \n";
//     }
// }
// class MySubClass extends MyClass{
//     public function CallMyProtectedFunction(){
//         $this->MyProtectedFunction();
//     }
// }
// $subObj = new MySubClass();
// $subObj->CallMyProtectedFunction();

// Privat
// class MyClass{
//     private function MyPrivatFunction(){
//         echo "This is a Private function. \n";
//     }
//     public function callMyPrivateFunction(){
//         $this->MyPrivatFunction();
//     }
// }
// $obj = new MyClass();
// $obj->callMyPrivateFunction();

// public funcion
// class MyClass{
//     public function MyPublicFunction(){
//         echo "This is a public function.";
//     }
// }
// $obj = new MyClass();
// $obj->MyPublicFunction();

// Protected function
// class MyClass{
//     protected function MyProtectedFunction(){
//         echo "This is a Protected Function.";
//     }
// }
// $oba = new MyClass();

// class MySubClass extends MyClass{
//     public function CallMyProtectedFunction(){
//         $this->MyProtectedFunction();
//     }
// }

// $subObj = new MySubClass();
// $subObj->CallMyProtectedFunction();

// Private function
// class MyClass {
//     Private function MyPrivateFunction(){
//         echo "This is a Private Function";
//     }
//     public function callPrivateFunction(){
//         $this->MyPrivateFunction();
//     }
// }

// $obj = new MyClass();
// $obj->callPrivateFunction();

// class MyClass {
//     public function __construct(){
//         echo "Constructor Called.";
//     }
//     public function __destruct(){
//         echo "Destructor called.";
//     }
// }
// $obj = new MyClass();

// class Animal {
//     public function makeSound(){
//         echo "Generic animal sound \n";
//     }
// }

// class Dog extends Animal {
//     public function makeSound(){
//         echo "Woof! Woof!";
//     }
// }

// $animal = new Animal();
// $animal->makeSound();

// $dog = new Dog();
// $dog->makeSound();

// class MyClass {
//     private $myProperty;

//     public function getMyProperty(){
//         return $this->myProperty;
//     }
//     public function setMyProperty($value){
//         $this->myProperty = $value;
//     }
// }
// $obj = new MyClass();
// $obj->setMyProperty("Hello");
// echo $obj->getMyProperty();

// class MyClass {
//     private $data = [];

//     public function __set($name, $value){
//         $this->data[$name] = $value;
//     }

//     public function __get($name){
//         return $this->data[$name] ?? null;
//     }
// }

// $obj = new MyClass();
// $obj->propertyName = "Magic Setter";
// echo $obj->propertyName;

// class Fruit {
//     public $name;
//     public $color;

//     public function __construct($name, $color){
//         $this->name = $name;
//         $this->color = $color;
//     }

//     public function intro(){
//         echo "The fruit is {$this->name} and the color is {$this->color}.";
//     }
// }

// $strawberry = new Fruit("Banana", "Yellow");
// $strawberry->intro();


// Strawberry is inherited from Fruit
// class Strawberry extends Fruit {
//     public function message(){
//         echo "Am I a fruit or a berry? ";
//     }
// }
// $strawberry = new Strawberry("Strawberry", "red");
// $strawberry->message();
// $strawberry->intro();

// Overriding properties
// class base {
//     public $name = "Jahidul Islam";

//     public function cal($a = 0, $b = 0){
//         return $a * $b;
//     }
// }

// class derived extends base{
//     public $name = "Nasim Uddin";

//     public function cal($a = 0, $b = 0){
//         return $a + $b;
//     }
// }
// $test = new derived();
// echo $test->cal();

// Overriding methods
// class base {
//     public function cal($a = 0, $b = 0){
//         return $a * $b;
//     }
// }
// class derived extends base {
//     public function cal($a = 0, $b = 0){
//         return $a + $b;
//     }
// }

// $test = new base();
// $test->cal(10, 4);

// $test1 = new derived();
// $test1->cal(10, 4);

// for($i=0; $i<100; $i++){
//     if($i % 7 == 0) echo $i."\n";
//     if($i % 11 == 0) echo $i."\n";
// }

// for($i=0; $i<100; $i++){
//     echo $i % 7 == 0 ? $i. "\n":'';
//     echo $i % 11 == 0 ? $i. "\n":'';
// }

// for($i = 0, $j = 0; $i < 100; $i+=7, $j+=11){
//     echo $i. "\n";
//     echo $j < 100 ? $j . "\n":'';
// }

// $employee1 = new manager("Jahidul Islam", 24, "Laksham", 25000);
// $employee2 = new employee("Nasim Uddin", 20, "Cumilla", 12000);

// $employee1->info();
// $employee2->info();

// class employee{
// 	public $name;
// 	public $age;
// 	public $address;
// 	public $salary;

// 	function __construct($name = "No Name", $age = 20, $address = "No Address", $salary = 0){
// 		$this->name = $name;
// 		$this->age = $age;
// 		$this->address = $address;
// 		$this->salary = $salary;
// 	}
// 	function info(){
// 		echo "<h3>Employee Information</h3>" . "\n";
// 		echo "Employee nameL: " . $this->name . "\n";
// 		echo "Employee Age: " . $this->age . "\n";
// 		echo "Employee Address:  " . $this->address . "\n";
// 		echo "Employee Salary: "  . $this->salary . "\n" . "\n";
// 	}
// }
// class manager extends employee{
// 	public $travle_alliance = 2500;
// 	public $phone_bill = 500;
// 	public $totalSalary;

// 	function info(){
// 		$this->totalSalary = $this->salary + $this->travle_alliance + $this->phone_bill;

// 		echo "<h3>Manager Information</h3>" . "\n";
// 		echo "Manager Name: " . $this->name . "\n";
// 		echo "Manager Age: " . $this->age . "\n";
// 		echo "Manager Address: " . $this->address . "\n";
// 		echo "Manager Salary: " . $this->totalSalary . "\n" . "\n";
// 	}
// }

// class hr extends manager{
// 	public $house_rent = 5000;
// 	public $health_insurance = 1050;

// 	function info(){
// 		$this->totalSalary = $this->salary + $this->travle_alliance + $this->phone_bill + $this->house_rent + $this->health_insurance;

// 		echo "<h3>HR Information</h3>" . "\n";
// 		echo "HR Name: " . $this->name . "\n";
// 		echo "HR Age: " . $this->age . "\n";
// 		echo "HR Address: " . $this->address . "\n";
// 		echo "HR Salary: " . $this->totalSalary . "\n" . "\n";
// 	}
// }

// $employee1 = new manager("Jahidul Islam", 24, "Laksham", 25000);
// $employee2 = new employee("Nasim Uddin", 20, "Cumilla", 12000);
// $employee3 = new HR("Momtian Ahmed", 24, "Cumilla", 15000);

// $employee1->info();
// $employee2->info();
// $employee3->info();

// for($i=0; $i<10; $i++){
// 	echo $i;
// 	echo PHP_EOL;

// 	if($i == 6){
// 		break;
// 	}
// }

// for($i=10; $i<100; $i++){
// 	if($i%13==0){
// 		echo $i;
// 		echo PHP_EOL;
// 		break;
// 	}
// }

// for($i=0; $i<=50; $i++){
// 	if($i<25){
// 		continue;
// 	}
// 	echo $i;
// 	echo PHP_EOL;
// } 

// for($i=0; $i<10; $i++){
// 	echo $i;
// 	echo PHP_EOL;
	
// 	if($i==5){
// 		break;
// 	}
// }

// for($i=20; $i<100; $i++){
// 	if($i%17==0){
// 		echo $i;
// 		echo PHP_EOL;
// 		break;
// 	}
// }

// for($i=0; $i<=50; $i++){
// 	if($i<25){
// 		continue;
// 	}
// 	echo $i;
// 	echo PHP_EOL;
// }

// abstract class A{
//     protected $name;

//     protected function __construct($n){
//         $this->name = $n;
//     }
//     abstract protected function show();
// }
// class B extends A {
//     public function show(){
//         echo $this->name;
//     }
// }

// abstract class parentClass{
//     public $name;
//     abstract protected function calc($a, $b);
// }

// class childClass extends parentClass{
//     public function calc($c, $d){
//         // echo $c + $d;
//         echo "Hello";
//     }
// }

// $test = new childClass();
// $test->calc(10, 25);

// abstract class parentClass{
//     public $name;
//     abstract protected function calc($a, $b);
// }

// class childClass extends parentClass{
//     public function calc($c, $d){
//         echo $c + $d;
//     }
// }
// $test = new childClass();
// $test ->calc(10,50);

// abstract class ParentClass {
//     abstract public function someMethod1();
//     abstract public function someMethod2($name, $color);
//     abstract public function someMethod3() : string;
// }

// Parent Class
// abstract class Car {
//     public $name;
//     public function __construct($name){
//         $this->name = $name;
//     }
//     abstract public function intro() : string;
// }

// // Child Class
// class Audi extends Car {
//     public function intro() : string {
//         return "Choose German Quality! I'm an $this->name!";
//     }
// }
// class Volvo extends Car {
//     public function intro() : string {
//         return "Proud to be Swedish! I'm a $this->name!";
//     }
// }
// class Citroen extends Car {
//     public function intro() : string {
//         return "French extravagance! I'm a $this->name!";
//     }
// }

// // Create Objects
// $audi = new audi("Audi");
// echo $audi->intro();
// echo "\n";

// $valvo = new volvo("Volvo");
// echo $valvo->intro();
// echo "\n";

// $citroen = new citroen("Citroen");
// echo $citroen->intro();

// Parent Class
// abstract class Car {
//     public $name;
//     public function __construct($name){
//         $this->name = $name;
//     }
//     abstract public function intro() : string;
// }

// // Child Class
// class Audi extends Car {
//     public function intro() : string {
//         return "Choose German Quality! I'm an $this->name!";
//     }
// }

// class Volvo extends Car {
//     public function intro() : string {
//         return "Proud to be Swedish! I'm a $this->name!";
//     }
// }

// class Citroen extends Car {
//     public function intro() : string {
//         return "French extravagance! I'm a $this->name!";
//     }
// }

// // Create objects form the child classes
// $audi = new audi("Audi");
// echo $audi->intro();
// echo "\n";

// $volvo = new volvo("Volvo");
// echo $volvo->intro();
// echo "\n";

// $citroen = new citroen("Citroen");
// echo $citroen->intro();

// abstract class ParentClass {
//     abstract protected function prefixName($name);
// }

// class ChildClass extends ParentClass{
//     public function prefixName($name){
//         if($name == "John Doe"){
//             $prefix = "Mr.";
//         }elseif($name == "Jane Doe"){
//             $prefix = "Mrs.";
//         }else {
//             $prefix = "";
//         }
//         return "{$prefix} {$name}";
//     }
// }

// $class = new ChildClass;
// echo $class->prefixName("John Doe");
// echo "\n";
// echo $class->prefixName("Jane Doe");


// strlan function
// $str = "Hello, World!";
// echo strlen($str); // outputs 13
// echo "\n";
// $str = "     ";
// echo strlen($str); // Outputs 5
// echo "\n";
// $str = "";
// echo strlen($str); // Outputs 0
// echo "\n";
// $str = "!Hola!";
// echo strlen($str); // Outputs 6
// echo "\n";


// // str replace php function
// // Example 1: Basic String Replacement
// $originalString = "Hello, world!";
// $search = "world";
// $replace = "PHP";
// $newString = str_replace($search, $replace, $originalString);
// echo $newString; // Outputs "Hello, PHP!"
// echo "\n";

// // Example 2: Replacing Multiple Values
// $originalString = "The quick brown fox jumps over the lazy dog.";
// $search = ["quick", "brown", "jumps"];
// $replace = ["slow", "red", "turtles"];
// $newString = str_replace($search, $replace, $originalString);
// echo $newString; // Outputs "The slow red fox turtles over the lazy dog."
// echo "\n";

// // Example 3: Using the $count Parameter
// $originalString = "one fish, two fish, red fish, blue fish";
// $search = "fish";
// $replace = "Dog";
// $count = 0;
// $newString = str_replace($search, $replace, $originalString, $count);
// echo $newString; // Outputs "one Dog, two Dog, red Dog, blue fish"
// echo "\n";
// echo $count; // Outputs 4
// echo "\n";

// // Example 4: Replacing in an Array
// $array = ["apple", "banana", "cherry"];
// $search = "a";
// $replace = "o";
// $newArray = str_replace($search, $replace, $array);
// print_r($newArray); // Outputs Array ( [0] => opple, [1] => bonono, [2] => cherry )


// // strpos PHP function
// // Example 1: Basic Usage
// $haystack = "Hello, world!";
// $needle = "world";
// $position = strpos($haystack, $needle);
// echo $position; // Outputs 7
// echo "\n";

// // Example 2: Substring Not Found
// $haystack = "I Love my country";
// $needle = "country";
// $position = strpos($haystack, $needle);
// if ($position === false) {
//     echo "Substring Not Found";
// }else {
//     echo "Substring Found at Position: " . $position;
// }
// echo "\n";
// // Example 3: Using Offset
// $haystack = "Hello, world! Hello again! Hello again again!";
// $needle = "Hello";
// $offset = 16;
// $position = strpos($haystack, $needle, $offset);
// echo $position; // Outputs 27
// echo "\n";

// // Example 4: Case Sensitivity
// $haystack = "Hello, World!";
// $needle = "world";
// $position = stripos($haystack, $needle);
// if ($position === false) {
//     echo "Substring Not Found";
// }else {
//     echo "Substring Found at Position: " . $position; // Outputs 7 Because "world" is not case-sensitive
// }


// // explode PHP function
// // Example 1: Basic Usage
// $string = "apple,banana,charry";
// $delimiter = ",";
// $result = explode($delimiter, $string);
// print_r($result); // Outputs Array ( [0] => apple, [1] => banana, [2] => charry )
// echo "\n";

// // Example 2: Basic Usage
// $string = "daryazhuwxd@mail.ruLnWhdhx9:LnWhdhx9:YZ33 DPW4 2GUL FJBS 3X52 IABT S5D7 5K3P:22-Sep-91:https://www.facebook.com/profile.php?id=100022838703014";
// $delimiter = ":";
// $result = explode($delimiter, $string);
// print_r($result); // Outputs Array ([0] => daryazhuwxd@mail.ruLnWhdhx9[1] => LnWhdhx9 [2] => YZ33 DPW4 2GUL FJBS 3X52 IABT S5D7 5K3P [3] => 22-Sep-91 [4] => https[5] => //www.facebook.com/profile.php?id=100022838703014)
// echo "\n";

// // Example 3: Using Limit Parameter
// $string = "one|two|three|four|five";
// $delimiter = "|";
// $limit = 3;
// $result = explode($delimiter, $string, $limit);
// print_r($result); // Outputs Array ( [0] => one, [1] => two, [2] => three )
// echo "\n";

// // Example 4: No Delimiter Found
// $string = "apple-banana-charry";
// $delimiter = ",";
// $result = explode($delimiter, $string);
// print_r($result); // Outputs Array ( [0] => apple-banana-charry )
// echo "\n";

// // Example 5: Empty String with Non-Empty Delimiter
// $string = "";
// $delimiter = ",";
// $result = explode($delimiter, $string);
// print_r($result); // Outputs Array ( [] )

// Array Search PHP function
// Example 1: Basic Usage
// $array = ["apple", "banana", "cherry"];
// $needle = "banana";
// $key = array_search($needle, $array);
// echo $key; // Outputs 1
// echo "\n";

// // Example 2: Value Not Found
// $array = ["apple", "banana", "cherry"];
// $needle = "orange";
// $key = array_search($needle, $array);
// if ($key === false){
//     echo "Value Not Found";
// }else {
//     echo "Value Found at Position: " . $key;
// }

// Example 3: Using Strict Parameter
// $array = [1, "1", 2, "2"];
// $needle = "2";
// $key = array_search($needle, $array);
// echo $key; // Outputs: 1
// echo "\n";

// $key_strict = array_search($needle, $array, true);
// echo $key_strict; // Outputs: 3

// if($key_strict === false){
//     echo "value not found with strict checking";
// }

// // Example 4: Associative Array
// $array = ["apple" => "red", "banana" => "yellow", "cherry" => "red"];
// $needle = "yellow";
// $key = array_search($needle, $array);
// echo $key; 

