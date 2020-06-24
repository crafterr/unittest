<?php
namespace App\Tests;

use Calculator\Multiply;
use PHPUnit\Framework\TestCase;
class MultiplyTest extends TestCase {

  /**
   * @test
   */
  public function testMultiplyUpGivenOperands() {
    $multiply = new Multiply();
    $multiply->setOperands([10,2,2]);

    $this->assertEquals(40,$multiply->calculate());

  }
}