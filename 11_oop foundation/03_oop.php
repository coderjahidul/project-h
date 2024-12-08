<?php 
// Define Fund class
class Fund{
    private $fund;

    function __construct($initialFound = 0){
        $this->fund = $initialFound;
    }

    public function addFound($money){
        $this->fund += $money;
    }

    public function deductFound($money){
        $this->fund -= $money;
    }

    public function getTotal(){
        echo $this->fund . "\n";
    }
}

// Create an object
$ourFund = new Fund(1000);

// Call the function
$ourFund->getTotal();
$ourFund->addFound(500);
$ourFund->getTotal();
$ourFund->deductFound(200);
$ourFund->getTotal();











































?>