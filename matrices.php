<?php 
  echo "\n=======================================================\n\n";
  
  final class Matrices {
    private $array = array(
      array(),
      array(),
      array(),
      array(),
      array()
    );
    private $line;
    private $column;

    public function __construct($line, $column) {
      $this->setLine($line);
      $this->setColumn($column);  
      for($index = 0; $index < $line; $index++) {
        for($findex = 0; $findex < $column; $findex++) {
          $this->setArray($index, $findex);
        }
      }
    }
    public function getDetails() {
      for($index = 0; $index < $this->getLine(); $index++) {
        for($findex = 0; $findex < $this->getColumn(); $findex++) {
          echo $this->getArrayIndex($index, $findex)." ";
        }
        echo "\n";
      }
    }
    public function getDiagonal() {
      for($index = 0; $index < $this->getLine(); $index++) {
        for($findex = 0; $findex < $this->getColumn(); $findex++) {
          if($index === $findex) {
            echo $this->getArrayIndex($index, $findex);
          }
          echo "  ";
        }
        echo "\n";
      }
    }

    private function setArray($index, $findex) {
      $this->array[$index][$findex] = rand(0, 9);
    }
    private function setLine($line) {
      $this->line = $line;
    }
    private function setColumn($column) {
      $this->column = $column;
    }

    private function getArrayIndex($index, $findex) {
      return $this->array[$index][$findex];
    }
    private function getLine() {
      return $this->line;
    }
    private function getColumn() {
      return $this->column;
    }
  } 

  $matriz = new Matrices(5, 5);
  $matriz->getDetails(); echo "\n";
  $matriz->getDiagonal();
  echo "\n=======================================================\n\n";
?>