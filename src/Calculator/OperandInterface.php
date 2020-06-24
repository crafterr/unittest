<?php


namespace Calculator;


interface OperandInterface {

  public function setOperands(array $operands = []);

  public function getOperands():array;

  public function calculate();
}