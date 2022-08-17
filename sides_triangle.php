<?php 
  echo "\n=======================================================\n\n";

  abstract class Triangle {
    protected $side_one;
    protected $side_two;
    protected $side_three;
    protected $array = array();

    public function __construct($side_one, $side_two, $side_three) {
      $this->setSideOne($side_one);
      $this->setSideTwo($side_two);
      $this->setSideThree($side_three);

      array_push($this->array, $this->getSideOne());
      array_push($this->array, $this->getSideTwo());
      array_push($this->array, $this->getSideThree());

      echo "Numbers: ".$side_one." ".$side_two." ".$side_three."\n";
    } 

    protected function setSideOne($side_one) {
      $this->side_one = $side_one;
    }
    protected function setSideTwo($side_two) {
      $this->side_two = $side_two;
    }
    protected function setSideThree($side_three) {
      $this->side_three = $side_three;
    }

    protected function getSideOne() {
      return $this->side_one;
    }
    protected function getSideTwo() {
      return $this->side_two;
    }
    protected function getSideThree() {
      return $this->side_three;
    }
  } 

  final class Size extends Triangle {
    public function getBiggerSide() {
      $aux = $this->array[0];
      for($side = 0; $side < count($this->array); $side++) {
        if($this->array[$side] > $aux) {
          $aux = $this->array[$side];
        }
      }
      echo "BiggerSide: ".$aux."\n";
    }
    public function getSmallSides() {
      $aux = $this->array[0];
      for($side = 0; $side < count($this->array); $side++) {
        if($this->array[$side] < $aux) {
          $aux = $this->array[$side];
        }
      }
      echo "SmallSide: ".$aux."\n";
    }
  }

  $triangle_scalene = new Size(11, 4, 87);
  $triangle_scalene->getBiggerSide();
  $triangle_scalene->getSmallSides();

  echo "\n=======================================================\n\n";
?>