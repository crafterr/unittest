<?php
namespace Cart\Tests;

use Cart\Item;
use PHPUnit\Framework\TestCase;
class ItemTest extends TestCase {

  /**
   * @test
   */
  public function testGetName() {
    $item = new Item();
    $item->setName('Adam');
    $this->assertEquals('Adam',$item->getName());
  }

  /**
   * @test
   */
  public function testGetPrice() {
    $item = new Item();
    $item->setPrice(1);
    $this->assertEquals(1,$item->getPrice());
  }



}