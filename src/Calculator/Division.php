<?php


namespace Calculator;


class Division extends Operand {

  /**
   * @inheritDoc
   */
  public function calculate() {
    $result = array_shift($this->operands);
    foreach ($this->operands as $operand) {
      $result /= $operand;
    }
    return $result;
  }


}