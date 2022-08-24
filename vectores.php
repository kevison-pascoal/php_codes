<?php 
  echo "\n=======================================================\n\n";
  
  abstract class Vectores {
    private $vector_one = array();
    private $vector_two = array();

    public function __construct($vector_one, $vector_two) {
      $this->setVectorOne($vector_one);
      $this->setVectorTwo($vector_two);
    }

    protected function setVectorOne($vector_one) {
      $this->vector_one = $vector_one;
    }
    protected function setVectorTwo($vector_two) {
      $this->vector_two = $vector_two;
    }

    protected function getVectorOne() {
      return $this->vector_one;
    }
    protected function getVectorTwo() {
      return $this->vector_two;
    }
    protected function getVectorOneIndex($index) {
      return $this->vector_one[$index];
    }
    protected function getVectorTwoIndex($index) {
      return $this->vector_two[$index];
    }
  }

  final class Vector_Filter extends Vectores {
    private $vector_filter = array();
    
    public function __construct($vector_one, $vector_two, $vector_filter) {
      $this->setVectorFilter($vector_filter);
      parent::__construct($vector_one, $vector_two);
    }
    
    public function getDetails() {
      echo "Vector Filtered: ";
      $session = 0;
      for($index = 0; $index < count($this->getVectorOne()); $index++) {
        $valid = 0;
        for($findex = 0; $findex < count($this->getVectorTwo()); $findex++) {
          if($this->getVectorOneIndex($index) === $this->getVectorTwoIndex($findex)) {
            $valid++;
          }
        }
        if($valid === 0) {
          $this->vector_filter[$session] = $this->getVectorOneIndex($index); 
          $session++;
        }
      }
      
      for($index = 0; $index < count($this->getVectorTwo()); $index++) {
        $valid = 0;
        for($findex = 0; $findex < count($this->getVectorOne()); $findex++) {
          if($this->getVectorTwoIndex($index) === $this->getVectorOneIndex($findex)) {
              $valid++;
          }
        }
        for($size = 0; $size < count($this->getVectorFilter()); $size++) {
          if($this->getVectorTwoIndex($index) === $this->getVectorFilterIndex($size)) {
            $valid++;
          }
        }
        if($valid === 0) {
          $this->vector_filter[$session] = $this->getVectorTwoIndex($index); 
          $session++;
        }
      }

      for($index = 0; $index < count($this->getVectorFilter()); $index++) {
        echo $this->getVectorFilterIndex($index)." "; 
      }
    }

    public function getDetailsOne() {
      echo "Vector_One: ";
      for($index = 0; $index < count($this->getVectorOne()); $index++) {
        echo $this->getVectorOneIndex($index)." ";
      }
    }
    public function getDetailsTwo() {
      echo "Vector_Two: ";
      for($index = 0; $index < count($this->getVectorTwo()); $index++) {
        echo $this->getVectorTwoIndex($index)." ";
      }
    }

    private function setVectorFilter($vector_filter) {
      $this->vector_filter = $vector_filter;
    }
    private function getVectorFilter() {
      return $this->vector_filter;
    }
    private function getVectorFilterIndex($index) {
      return $this->vector_filter[$index];
    }
  }

  $vector_filter = array();
  $vector_one = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
  $vector_two = array(5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16);

  $filter = new Vector_Filter($vector_one, $vector_two, $vector_filter);
  $filter->getDetailsOne(); echo "\n";
  $filter->getDetailsTwo(); echo "\n\n";
  $filter->getDetails();

  echo "\n\n=======================================================\n\n";
?>