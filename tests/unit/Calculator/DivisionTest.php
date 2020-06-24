<?php
namespace App\Tests;

use Calculator\Addition;
use Calculator\Calculator;
use Calculator\Division;
use Calculator\Exceptions\NoDivideByZeroException;
use PHPUnit\Framework\TestCase;
class DivisionTest extends TestCase {

  /**
   * @test
   */
  public function testDivUpGivenOperands() {
    $division = new Division();
    $division->setOperands([10,2]);
    $calculator = new Calculator($division);

    $this->assertEquals(5,$calculator->calculate());

  }

  public function testNoOperandsGivenThrowsExceptionWhenCalculating() {

    $division = new Division();
    $division->setOperands([10,0,2,0,0]);
    $calculator = new Calculator($division);

    $this->assertEquals(5,$calculator->calculate());
  }
}