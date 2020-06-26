<?php
namespace Cart\Tests;

use ArrayIterator;
use Cart\Cart;
use Cart\Item;
use IteratorAggregate;
use PHPUnit\Framework\TestCase;
class CartTest extends TestCase {

  /**
   * @test
   */
  public function testIsInstanceOfIterationAgregate() {
    $cart = new Cart(new Item());
    $this->assertInstanceOf(IteratorAggregate::class,$cart);
  }


  /**
   * @test
   */
  public function testItemsCanBeIterated() {
    $item1 = new Item();
    $item1->setName('Item1');
    $item1->setPrice(12);
    $item2 = new Item();
    $item2->setName('Item2');
    $item2->setPrice(20);
    $cart = new Cart();
    $cart->addItem($item1);
    $cart->addItem($item2);
    $items = [];
    foreach ($cart as $item) {
      $items[] = $item;
    }
    $this->assertCount(2,$items);
    $this->assertEquals('Item1',$items[0]->getName());
    $this->assertEquals('20',$items[1]->getPrice());
    $this->assertInstanceOf(ArrayIterator::class,$cart->getIterator());
  }


  /**
   * @test
   */
  public function testSumOfProduct() {
    $item1 = new Item();
    $item1->setName('Item1');
    $item1->setPrice(12);
    $item2 = new Item();
    $item2->setName('Item2');
    $item2->setPrice(20);
    $cart = new Cart();
    $cart->addItem($item1);
    $cart->addItem($item2);

    $this->assertEquals(32,$cart->getSumPrice());

  }

  /**
   * @test
   */
  public function testReturnJsonEncodedItems() {
    $item1 = new Item();
    $item1->setName('Item1');
    $item1->setPrice(12);
    $item2 = new Item();
    $item2->setName('Item2');
    $item2->setPrice(20);
    $cart = new Cart();
    $cart->addItem($item1);
    $cart->addItem($item2);
    $this->assertInternalType('string',$cart->toJson());
    $this->assertEquals('[{"name":"Item1","price":12},{"name":"Item2","price":20}]',$cart->toJson());
  }
}