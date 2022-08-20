<?php
  echo "\n-------------------------------------------------------\n";

  class Calculator {
    private $number_one;
    private $number_two;
    private $number_three;
    private $operator;

    public function __construct(float $number_one, float $number_two, float $number_three, string $operator) {
      $this->setNumberOne($number_one);
      $this->setNumberTwo($number_two);
      $this->setNumberThree($number_three);
      $this->setOperator($operator);

      switch($operator) {
        case 'A':
          $result = $this->getNumberOne() + $this->getNumberTwo() + $this->getNumberThree();
          echo "The result of de all operators (".$this->getNumberOne().", ".$this->getNumberTwo().", ".$this->getNumberThree().") is: $result";
          break;
        case 'S':
          $result = $this->getNumberOne() - $this->getNumberTwo() - $this->getNumberThree();
          echo "The result of de all operators (".$this->getNumberOne().", ".$this->getNumberTwo().", ".$this->getNumberThree().") is: $result";
          break;
        case 'M':
          $result = $this->getNumberOne() * $this->getNumberTwo() * $this->getNumberThree();
          echo "The result of de all operators (".$this->getNumberOne().", ".$this->getNumberTwo().", ".$this->getNumberThree().") is: $result";
          break;
        case 'D':
          $format = $this->getNumberOne() / $this->getNumberTwo() / $this->getNumberThree(); 
          $result = number_format($format, 2);
          echo "The result of de all operators (".$this->getNumberOne().", ".$this->getNumberTwo().", ".$this->getNumberThree().") is: $result";   
          break;     
        default:
          echo "The operator ".$this->getOperator()." is invalid.";
          echo "\nChoose one of these operators: A, S, M or D";
      }
    }

    private function setNumberOne($number_one) {
      $this->number_one = $number_one;
    }
    private function setNumberTwo($number_two) {
      $this->number_two = $number_two;
    }
    private function setNumberThree($number_three) {
      $this->number_three = $number_three;
    }
    private function setOperator($operator) {
      $this->operator = $operator;
    }

    private function getNumberOne() {
      return $this->number_one;
    }
    private function getNumberTwo() {
      return $this->number_two;
    }
    private function getNumberThree() {
      return $this->number_three;
    }
    private function getOperator() {
      return $this->operator;
    }
  }

  $sum_three_numbers = new Calculator(rand(5, 20), rand(3, 12), rand(1, 8), 'A');

  echo "\n-------------------------------------------------------\n\n";
?>