<?php 
// Exception Function

class Sturdent{
    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;

        if($age < 4){
            throw new Exception("Invalid Age", 1001);
        }elseif($age > 35){
            throw new Exception("Too Old", 1002);
        }
    }
}
try{
    $s = new Sturdent("Jahidul Islam", 12);
    echo $s->name . " " . $s->age . "\n";
}catch(Exception $e){
    echo $e->getCode() . " " . $e->getMessage() . "\n";
}finally{
    echo "Finally";
}
