<?php


namespace Calculator;


use Calculator\Exceptions\NoDivideByZeroException;
use Calculator\Exceptions\NoOperandsException;

class Division extends Operand {

  /**
   * @inheritDoc
   */
  public function calculate() {

    if (count($this->operands) === 0) {
      throw new NoOperandsException();
    }

    return array_reduce(array_filter($this->operands),function($a,$b){
      if ($a !== null && $b !==null) {
        return $a / $b;
      }
      return $b;
    },null);
  }


}