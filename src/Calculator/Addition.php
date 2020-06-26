<?php


namespace Calculator;


use Calculator\Exceptions\NoOperandsException;

class Addition extends Operand {

  /**
   * @inheritDoc
   */
  public function calculate() {

    if (count($this->operands) === 0) {
      throw new NoOperandsException();
    }
      return array_sum($this->operands);
  }

}