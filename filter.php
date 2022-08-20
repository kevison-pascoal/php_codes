<?php
  echo "\n\n=======================================================\n\n";
  
  final class Filter {
    private $init;
    private $limit;
    private $array;

    public function __construct($init, $limit, $array) {
      $this->setInit($init);
      $this->setLimit($limit);
      $this->setArray($array);

      $array_filter = array();
      for($filter = 0; $filter < count($this->getArray()); $filter++) {
        if($this->getArrayIndex($filter) >= $this->getInit() && $this->getArrayIndex($filter) <= $this->getLimit()) {
          array_push($array_filter, $this->array[$filter]);
        }
      }
      for($output = 0; $output < count($array_filter); $output++) {
        echo $array_filter[$output]." ";
      }
    }

    private function setInit($init) {
      $this->init = $init;
    }
    private function setLimit($limit) {
      $this->limit = $limit;
    }
    private function setArray($array) {
      $this->array = $array;
    }

    private function getInit() {
      return $this->init;
    }
    private function getLimit() {
      return $this->limit;
    }

    private function getArray() {
      return $this->array;
    }
    private function getArrayIndex($index) {
      return $this->array[$index];
    }
  }

  $array = array(1, 100, 158, 258, 2, 12, 548, 35, 282, 124, 245, 188, 135, 124);
  $init = 100;
  $limit = 200;

  $filter = new Filter($init, $limit, $array);

  echo "\n\n=======================================================\n\n";
?>