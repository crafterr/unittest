<?php


namespace Calculator;


abstract class Operand implements OperandInterface {

  /**
   * @var array
   */
  protected $operands = [];

  /**
   * @inheritDoc
   */
  public function setOperands(array $operands = []) {
    $this->operands = $operands;
  }

  /**
   * @inheritDoc
   */
  public function getOperands():array {
    return $this->operands;
  }

}