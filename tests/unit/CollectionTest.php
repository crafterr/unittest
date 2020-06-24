<?php
namespace App\Tests;

use App\Support\Collection;
use PHPUnit\Framework\TestCase;
use IteratorAggregate;
use ArrayIterator;
class CollectionTest extends TestCase {

  public function testEmptyCollection() {
    $collection = new Collection();
    $this->assertEmpty($collection->get());
  }

  public function testCountForItemsPassedIn() {
    $collection = new Collection([
        'one','two','three'
        ]
    );

    $this->assertEquals(3,$collection->count());

  }

  /**
   * @test
   */
  public function testCountForItemsPassedIn2() {
    $collection = new Collection([
        'one','two'
      ]
    );
    $this->assertCount(2,$collection->get());
    $this->assertEquals($collection->get()[0],'one');
    $this->assertEquals($collection->get()[1],'two');
  }

  /**
   * @test
   */
  public function testIsInstanceOfIterationAgregate() {
    $collection = new Collection();
    $this->assertInstanceOf(IteratorAggregate::class,$collection);
  }

  /**
   * @test
   */
  public function testCollectionCanBeIterated() {
    $collection = new Collection([
        'one','two','three','four'
      ]
    );
    $items = [];
    foreach ($collection as $item) {
      $items[] = $item;
    }
    $this->assertCount(4,$items);
    $this->assertInstanceOf(ArrayIterator::class,$collection->getIterator());
  }

  /**
   * @test
   */
  public function testCollectionCanBeMergedWithAnotherCollection() {
    $collection1 = new Collection([
        'one','two'
      ]
    );
    $collection2 = new Collection([
        'three','four'
      ]
    );

    $collection1->merge($collection2);

    $this->assertCount(4,$collection1->get());
    $this->assertEquals('4',$collection1->count());
  }

  /**
   * @test
   */
  public function testCanAddToExistingCollection() {
    $collection1 = new Collection([
        'one','two'
      ]
    );

    $collection1->add(['three']);
    $this->assertCount(3,$collection1->get());
    $this->assertEquals('3',$collection1->count());
  }

  /**
   * @test
   */
  public function testReturnJsonEncodedItems() {
    $collection = new Collection([
       ['username' => 'Alex'],
       ['username' => 'Billy']
      ]
    );
    $this->assertInternalType('string',$collection->toJson());
    $this->assertEquals('[{"username":"Alex"},{"username":"Billy"}]',$collection->toJson());
  }

  /**
   * @test
   */
  public function testJsonEncodingACollectionObjectReturnJson() {
    $collection = new Collection([
        ['username' => 'Alex'],
        ['username' => 'Billy']
      ]
    );
    $encoded = json_encode($collection);

    $this->assertInternalType('string',$encoded);
    $this->assertEquals('[{"username":"Alex"},{"username":"Billy"}]',$encoded);
  }
}