<?php 
// require vandor autoloader
require __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase {
    public function testSomething(){
        $result = 1 + 1;
        $this->assertEquals(2, $result);
    }

    public function testSomethingElse(){
        $result = false;
        $this->assertEquals(false, $result);
    }

    public function testSomthingElse2(){
        $cust = 50 * 3;
        $this->assertEquals(150, $cust);
    }

    public function testSomethingElse3(){
        $cust = 15 * 3;
        $this->assertEquals(45, $cust);
    }
}