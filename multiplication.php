<?php 
  echo "\n\n=======================================================\n\n";
  
  final class Multiplication {
    private $number;
    private $table;

    public function __construct($number, $table) {
      $this->setNumber($number);
      $this->setTable($table);
    }

    public function getMultiplication() {
      for($loop = 0; $loop <= $this->getTable(); $loop++) {
        echo $this->getNumber()." x ".$loop." === ".$this->getNumber()*$loop."\n";
      }
    }

    private function setNumber($number) {
      $this->number = $number;
    }
    private function setTable($table) {
      $this->table = $table;
    }

    private function getNumber() {
      return $this->number;
    }
    private function getTable() {
      return $this->table;
    }
  }

  $multiplication = new Multiplication(17, 10);
  $multiplication->getMultiplication();
  echo "\n\n=======================================================\n\n";
?>