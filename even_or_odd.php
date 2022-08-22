<?php
  echo "\n\n=======================================================\n\n";
  
  final class Evodd {
    private $array;

    public function __construct($array) {
      $this->setArray($array);
    }

    public function getDetails() {
      $this->evodd();  
    }

    private function evodd() {
      for($evodd = 0; $evodd < count($this->getArray()); $evodd++) {
        if($this->getArrayIndex($evodd) % 2 == 0) {
          echo $this->getArrayIndex($evodd)." : Par";
        } else {
          echo $this->getArrayIndex($evodd)." : Impar";
        }
        if($evodd < count($this->getArray()) - 1) {
          echo "\n";
        }
      }
    }

    private function setArray($array) {
      $this->array = $array;
    } 
    private function getArray() {
      return $this->array;
    }
    private function getArrayIndex($index) {
      return $this->array[$index];
    }
  } 

  $array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 28, 33, 42);
  $evodd = new Evodd($array);
  $evodd->getDetails();

  echo "\n\n=======================================================\n\n";
?>