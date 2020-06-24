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
    $this->assertEquals(15,$addition->calculate());
  }

  public function testNoOperandsGivenThrowsExceptionWhenCalculating() {

    $this->expectException(NoOperandsException::class);
    $addition = new Addition();
    $addition->calculate();
  }
}