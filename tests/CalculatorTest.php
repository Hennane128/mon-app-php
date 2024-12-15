<?php
// tests/CalculatorTest.php
use PHPUnit\Framework\TestCase;

require_once 'Calculator.php';

class CalculatorTest extends TestCase {
    public function testAdd() {
        $calc = new Calculator();
        $this->assertEquals(4, $calc->add(2, 2));  // Test pour l'addition de 2 et 2
        $this->assertEquals(0, $calc->add(-2, 2)); // Test pour l'addition de -2 et 2
    }
}
