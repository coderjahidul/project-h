<?php 
class Planet{
    public $name;
    public function __construct($name){
        $this->name = $name;
    }
}

$e = new Planet("Earth");
// $e1 = $e;
$e2 = new Planet("Earth");
$m = new Planet("Mars");
// $e2->name = "New Earth";

if($e == $e2){
    echo "Similar Planets";
}else{
    echo "Not Similar Planets";
}



?>