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
    if (count($this->operand->getOperands()) === 0) {
      throw new NoOperandsException();
    }

    return $this->operand->calculate();
  }


}