<?php
require __DIR__ . '/../vendor/autoload.php';
require("src/Calculator.php");
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase{
    private $calc;
    protected function setUp(): void{
        $this->calc = new Calculator();
    }

    function testAdditionOfTwoNumbers(){
        $result = $this->calc->add(10, 20);
        $this->assertEquals(30, $result);
    }

    function testAdditionOfMultipleNumbers(){
        $result = $this->calc->add(10, 20, 30, 40);
        $this->assertEquals(100, $result);
    }

    function testSubtractionOfTwoNumbers(){
        $result = $this->calc->subtract(10, 20);
        $this->assertEquals(-10, $result);
    }

    function testMultiplicationOfTwoNumbers(){
        $result = $this->calc->multiply(10, 20);
        $this->assertEquals(200, $result);

        $result = $this->calc->multiply(10, 20, 30, 40);
        $this->assertEquals(80000, $result);
    }

    function testDivisionOfTwoNumbers(){
        $result = $this->calc->divide(10, 20);
        $this->assertEquals(0.5, $result);
    }
}