<?php
namespace App\Tests;

use Calculator\Addition;
use Calculator\Calculator;
use Calculator\Exceptions\NoOperandsException;
use PHPUnit\Framework\TestCase;
class AdditionTest extends TestCase {

  /**
   * @test
   */
  public function testAddsUpGivenOperands() {
    $addition = new Addition();
    $addition->setOperands([5,10]);
    $calculator = new Calculator($addition);


    $this->assertEquals(15,$calculator->calculate());
  }

  public function testNoOperandsGivenThrowsExceptionWhenCalculating() {

    $this->expectException(NoOperandsException::class);
    $addition = new Addition();
    $calculator = new Calculator($addition);


    $calculator->calculate();
  }
}