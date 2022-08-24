<?php 
  echo "\n=======================================================\n\n";
  
  final class Matriz {
    private $array = array();
    private $line;
    private $column;

    public function __construct($line, $column) {
      $this->setLine($line);
      $this->setColunm($column);
    }
    
    public function getDetailsPair() {
      for($index = 0; $index < $this->line; $index++) {
        for($findex = 0; $findex < $this->column; $findex++) {
          $rand = rand(0, 9);
          while($rand%2 != 0) {
            $rand = rand(0, 9);
          }
          $this->setArray($index, $findex, $rand);
        } 
      }

      for($index = 0; $index < $this->line; $index++) {
        for($findex = 0; $findex < $this->column; $findex++) {
          echo $this->getArray($index, $findex)." ";
        }
        echo "\n";
      }
    }
    public function getDetailsOdd() {
      for($index = 0; $index < $this->line; $index++) {
        for($findex = 0; $findex < $this->line; $findex++) {
          $rand = rand(0, 9);
          while($rand%2 == 0) {
            $rand = rand(0, 9);
          }
          $this->setArray($index, $findex, $rand);
        } 
      }

      for($index = 0; $index < $this->line; $index++) {
        for($findex = 0; $findex < $this->line; $findex++) {
          echo $this->getArray($index, $findex)." ";
        }
        echo "\n";
      }
    }
    private function setArray($line, $column, $rand) {
      $this->array[$line][$column] = $rand;
    }
    private function getArray($line, $column) {
      return $this->array[$line][$column];
    }

    private function setLine($line) {
      $this->line = $line;
    }
    private function setColunm($column) {
      $this->column = $column;
    }
  }

  $line = 5;
  $colunm = 5;

  $matriz = new Matriz($line, $colunm);
  $matriz->getDetailsPair();
  echo "\n";
  $matriz->getDetailsOdd();

  echo "\n\n=======================================================\n\n";
?>