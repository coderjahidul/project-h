<?php
// Interface segregation
interface Vehicle {
    public function getMileage(): string;
    public function getName(): string;
    public function getPrice(): string;
}

interface TwoWheelers {
    public function twoTyre(): string;
    public function petrolCompatible(): string;
}

interface FourWheelers {
    public function fourTyre(): string;
    public function dieselCompatible(): string;
}

class Bike implements Vehicle, TwoWheelers {
    private string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function getMileage(): string {
        return "Bike Mileage is 160km per hour";
    }

    public function getName(): string {
        return "Bike Name is {$this->name}";
    }

    public function getPrice(): string {
        return "Bike Price is $10,000";
    }

    public function twoTyre(): string {
        return "Bike has two tyres";
    }

    public function petrolCompatible(): string {
        return "Bike is petrol compatible";
    }
}

class Car implements Vehicle, FourWheelers {
    private string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function getMileage(): string {
        return "Car Mileage is 100km per hour";
    }

    public function getName(): string {
        return "Car Name is {$this->name}";
    }

    public function getPrice(): string {
        return "Car Price is $20,000";
    }

    public function fourTyre(): string {
        return "Car has four tyres";
    }

    public function dieselCompatible(): string {
        return "Car is diesel compatible";
    }
}

// Instantiate and use the Bike class
$bike = new Bike("Honda");
echo $bike->getMileage() . "\n";
echo $bike->getName() . "\n";
echo $bike->getPrice() . "\n";
echo $bike->twoTyre() . "\n";
echo $bike->petrolCompatible() . "\n";

echo "\n";

// Instantiate and use the Car class
$car = new Car("Lamborghini");
echo $car->getMileage() . "\n";
echo $car->getName() . "\n";
echo $car->getPrice() . "\n";
echo $car->fourTyre() . "\n";
echo $car->dieselCompatible() . "\n";
