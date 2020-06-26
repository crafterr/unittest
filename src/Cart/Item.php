<?php
namespace Cart;

/**
 * Class Item
 *
 * @package Cart
 */
class Item implements ItemInterface {

  /**
   * @var string
   */
  private $name;

  /**
   * @var int
   */
  private $price;

  /**
   * @inheritDoc
   */
  public function getName():string {
    return $this->name;
  }

  /**
   * @inheritDoc
   */
  public function setName(string $name): void {
    $this->name = $name;
  }

  /**
   * @inheritDoc
   */
  public function getPrice(): int {
    return $this->price;
  }

  /**
   * @inheritDoc
   */
  public function setPrice(int $price): void {
    $this->price = $price;
  }


}