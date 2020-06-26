<?php
namespace App\Tests;

use Calculator\Addition;
use Calculator\Calculator;
use Calculator\Division;
use Calculator\Exceptions\NoOperandsException;
use Calculator\Multiply;
use PHPUnit\Framework\TestCase;
class CalculatorTest extends TestCase {


  /**
   * @test
   */
  public function testIsInstanceOfOperandInterface() {
    $this->expectException(\TypeError::class);
    $addition = new \stdClass();

    $calculator = new Calculator($addition);

  }


  /**
   * @test
   */
  public function testAdditionCalculator() {
    $addition = new Addition();
    $addition->setOperands([5,10]);
    $calculator = new Calculator($addition);
    $this->assertEquals(15,$calculator->calculate());
  }

  /**
   * @test
   */
  public function testMultiplyCalculator() {
    $multiply = new Multiply();
    $multiply->setOperands([10,2]);
    $calculator = new Calculator($multiply);
    $this->assertEquals(20,$calculator->calculate());
  }

  /**
   * @test
   */
  public function testDividingCalculator() {
    $division = new Division();
    $division->setOperands([10,2]);
    $calculator = new Calculator($division);
    $this->assertEquals(5,$calculator->calculate());
  }

  public function testIsSetParameterInOperand() {
    $addition = new Addition();
    $addition->setOperands([5,10]);
    $this->assertEquals([5,10],$addition->getOperands());
  }
}