<?php 
  echo "\n\n=======================================================\n\n";
  
  final class Identifier {
    private $array;
    private $sum = 0;
    private $amount = 0;

    public function __construct(array $array) {
      $this->setArray($array);
      for($int = 0; $int < count($this->array); $int++) {
        if($this->array[$int] > 0) {
          $this->setSum($array[$int]);
          echo $this->array[$int]." ";
        }
      }
      echo "\nSun positive numbers tot: ".$this->getSum()."\n\n";
      for($count = 0; $count < count($this->array); $count++) {
        if($this->array[$count] < 0) {
          $this->setAmount();
          echo $this->array[$count]." ";
        }
      }
      echo "\nAmount of nagative numbers is: ".$this->getAmount();
    }

    private function setArray($array) {
      $this->array = $array;
    }
    private function setSum($piece) {
      $this->sum += $piece;
    }
    private function setAmount() {
      $this->amount += 1;
    }

    private function getSum() {
      return $this->sum;
    }
    private function getAmount() {
      return $this->amount;
    }
  }

  $array = array(
    1, -2, 5, 4, -8, 7, 5, -8, 7, -3, 5, -4, 11, -17, 24, -33, 6, 8, -9, -10
  );
  
  $identifier = new Identifier($array);

  echo "\n\n=======================================================\n\n";
?>