<?php
  echo "\n\n=======================================================\n\n";
  
  final class Manager {
    private $array = array();
    private $array_pair = array();

    public function __construct($array) {
      $this->setArray($array);
    }

    public function getDetails() {
      $this->manager();  
      $this->managerPair();
      $this->managerMedia();
    }

    private function manager() {
      for($index = 0; $index < count($this->getArray()); $index++) {
        echo $this->getArrayIndex($index). " ";
      }
      echo "\n";
    }
    private function managerPair () {
      $index_pair = 0;
      for($index = 0; $index < count($this->getArray()); $index++) {
        if($this->getArrayIndex($index) % 2 == 0) {
          $this->setArrayPair($index_pair, $this->getArrayIndex($index));
          $index_pair++;
        }
      }
      echo "\nPair numbers: ";
      for($index = 0; $index < count($this->getArrayPair()); $index++) {
        echo $this->getArrayPairIndex($index)." ";
      }
    }
    private function managerMedia () {
      $media = 0;
      for($index = 0; $index < count($this->getArray()); $index++) {
        $media += $this->getArrayIndex($index);
      }
      echo "\nMedia values: ".number_format($media / (count($this->getArray())), 3);
    }

    private function setArray($array) {
      $this->array = $array;
    } 
    private function setArrayPair($index, $value) {
      $this->array_pair[$index] = $value;
    }

    private function getArray() {
      return $this->array;
    }
    private function getArrayPair() {
      return $this->array_pair;
    }
  
    private function getArrayIndex($index) {
      return $this->array[$index];
    }
    private function getArrayPairIndex($index) {
      return $this->array_pair[$index];
    }
  } 

  $array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 28, 33, 42);
  $Maneger = new Manager($array);
  $Maneger->getDetails();

  echo "\n\n=======================================================\n\n";
?>