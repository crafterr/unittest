<?php


namespace Calculator;


use Calculator\Exceptions\NoOperandsException;

class Addition extends Operand {

  /**
   * @inheritDoc
   */
  public function calculate() {

      return array_sum($this->operands);


  }

}