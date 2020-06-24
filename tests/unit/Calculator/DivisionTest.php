<?php
namespace App\Tests;

use Calculator\Addition;
use Calculator\Division;
use PHPUnit\Framework\TestCase;
class DivisionTest extends TestCase {

  /**
   * @test
   */
  public function testDivUpGivenOperands() {
    $division = new Division();
    $division->setOperands([10,2]);

    $this->assertEquals(5,$division->calculate());

  }
}