<?php


namespace Calculator;


class Multiply extends Operand {

  public function calculate() {
    $result = array_shift($this->operands);
    foreach ($this->operands as $operand) {
      $result *= $operand;
    }
    return $result;
  }


}