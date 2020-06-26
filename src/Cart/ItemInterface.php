<?php


namespace Cart;


interface ItemInterface {

  /**
   * @return string
   */
  public function getName():string;

  /**
   * @param $name
   */
  public function setName(string $name): void;

  /**
   * @return int
   */
  public function getPrice(): int;

  /**
   * @param int $price
   */
  public function setPrice(int $price): void;
}