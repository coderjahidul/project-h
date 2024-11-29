<?php 
// class MotorCycle{
//     private $displacement, $capacity, $mileage;

//     function __construct($displacement, $capacity, $mileage){
//         $this->displacement = $displacement;
//         $this->capacity = $capacity;
//         $this->mileage = $mileage;
//     }

//     public function getDisplacement(){
//         return $this->displacement;
//     }
//     public function setDisplacement($displacement){
//         $this->displacement = $displacement;
//     }
// }

// $pulsar = new MotorCycle('250cc', '16ltr', '30km');
// echo $pulsar->getDisplacement();

class MotorCycle{
    private $parameter;

    function __construct($displacement, $capacity, $mileage){
        $this->parameter = [];
        $this->parameter['displacement'] = $displacement;
        $this->parameter['mileage'] = $mileage;
        $this->parameter['capacity'] = $capacity;
    }

    function __isset($name){
        if(!isset($this->parameter[$name])){
            echo "{$name} is not set\n";
            return false;
        }
        return true;
    }

    function __unset($name){
        print_r($this->parameter);
        unset($this->parameter[$name]);
        print_r($this->parameter);
    }

    function __get($name){
        return $this->parameter[$name];
    }

    function __set($name, $value){
        $this->parameter[$name] = $value;
    }

    function __call($name, $arguments){
        if("run" == $name){
            if($arguments){
                echo "I am running at {$arguments[0]} \n";
            }else{
                echo "I am running \n";
            }
        }
    }

    static function __callStatic($name, $arguments){
        echo "Static Call \n";
    }
}

MotorCycle::wash();

$pulsar = new MotorCycle('250cc', '16ltr', '30km');
// echo $pulsar->displacement;
// echo "\n";
// echo $pulsar->mileage;
// echo "\n";
// echo $pulsar->capacity;

if(isset($pulsar->tiresize)){
    echo $pulsar->tiresize;
}else{
    echo "Not Found";
}

unset($pulsar->mileage);
$pulsar->run('100kmph');






















echo "\n";
// Car
class Car{
    private $parameter;
    function __construct($displacement, $capacity, $mileage, $tiresize){
        $this->parameter = [];
        $this->parameter['displacement'] = $displacement;
        $this->parameter['mileage'] = $mileage;
        $this->parameter['capacity'] = $capacity;
        $this->parameter['tiresize'] = $tiresize;
    }

    function __get($name){
        return $this->parameter[$name];
    }

    function __set($name, $value){
        $this->parameter[$name] = $value;
    }
}

$bmw = new Car('250cc', '16ltr', '30km', '20');
echo $bmw->tiresize;








































?>