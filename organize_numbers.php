<?php 
  echo "\n=======================================================\n\n";
  
  abstract class Organize {
    protected $number_one;
    protected $number_two;
    protected $number_three;

    public function __construct($number_one, $number_two, $number_three) {
      $this->setNumberOne($number_one);
      $this->setNumberTwo($number_two);
      $this->setNumberThree($number_three);
    }

    protected function setNumberOne($number_one) {
      $this->number_one = $number_one;
    }
    protected function setNumberTwo($number_two) {
      $this->number_two = $number_two;
    }
    protected function setNumberThree($number_three) {
      $this->number_three = $number_three;
    }

    protected function getNumberOne() {
      return $this->number_one;
    }
    protected function getNumberTwo() {
      return $this->number_two;
    }
    protected function getNumberThree() {
      return $this->number_three;
    }
  }
  final class Maxized extends Organize {
    private $aux = 0;
    private $array = [];
    public function maxized() {
      array_push($this->array, $this->getNumberOne());
      array_push($this->array, $this->getNumberTwo());
      array_push($this->array, $this->getNumberThree());

      for($index = 0; $index < count($this->array); $index++) {
        for($findex = 0; $findex < count($this->array); $findex++) {
          if($this->array[$index] < $this->array[$findex]) {
            $this->aux = $this->array[$index];
            $this->array[$index] = $this->array[$findex];
            $this->array[$findex] = $this->aux;
          }
        }
      }

      for($index = 0; $index < count($this->array); $index++) {
        echo $this->array[$index]."\n";
      }
    }
  }
  final class Minimized extends Organize {
    private $aux = 0;
    private $array = [];
    public function minimized() {
      array_push($this->array, $this->getNumberOne());
      array_push($this->array, $this->getNumberTwo());
      array_push($this->array, $this->getNumberThree());

      for($index = 0; $index < count($this->array); $index++) {
        for($findex = 0; $findex < count($this->array); $findex++) {
          if($this->array[$index] > $this->array[$findex]) {
            $this->aux = $this->array[$index];
            $this->array[$index] = $this->array[$findex];
            $this->array[$findex] = $this->aux;
          }
        }
      }

      for($index = 0; $index < count($this->array); $index++) {
        echo $this->array[$index]."\n";
      }
    }
  }

  $exec_maxized = new Maxized(13, 2, 54);
  $exec_minimized = new Minimized(21, 84, 12);
  echo "Maximized:\n";
  echo $exec_maxized->maxized()."\n";
  echo "Minimized:\n";
  echo $exec_minimized->minimized();
  echo "\n=======================================================\n\n";
?>