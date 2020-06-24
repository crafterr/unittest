<?php


namespace Calculator;


use Calculator\Exceptions\NoOperandsException;

class Calculator implements CalculateInterface {

  /**
   * @var \Calculator\OperandInterface
   */
  private $operand;

  public function __construct(OperandInterface $operand) {
    $this->operand = $operand;
  }

  /**
   * @inheritDoc
   */
  public function calculate() {
    return $this->operand->calculate();
  }


}