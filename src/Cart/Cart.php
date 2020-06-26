<?php
namespace Cart;

use IteratorAggregate;
use ArrayIterator;
use JsonSerializable;
/**
 * Class Cart
 *
 * @package Cart
 */
class Cart implements IteratorAggregate, JsonSerializable {

  /**
   * @var array
   */
  private $items = [];

  /**
   * @param \Cart\ItemInterface $item
   */
  public function addItem(ItemInterface $item) {
    array_push($this->items,$item);
  }

  /**
   * @return array|\Traversable
   */
  public function getIterator() {
    return new ArrayIterator($this->items);
  }

  /**
   * @return int
   */
  public function getSumPrice() {
    $sum = 0;
    foreach ($this->items as $item) {
      $sum += $item->getPrice();
    }
    return $sum;
  }

  /**
   * @return
   */
  public function jsonSerialize() {
    return $this->items;
  }

  /**
   * @return false|string
   */
  public function toJson() {
    $items = array_map(function($item){
      return [
        'name' => $item->getName(),
        'price' => $item->getPrice()
      ];
    },$this->items);

    return json_encode($items);
  }



}