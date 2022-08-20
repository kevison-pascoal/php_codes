<?php
  echo "\n\n=======================================================\n\n";
  
  final class Height {
    private $height_one = 0;
    private $height_two = 0;
    private $rate_one;
    private $rate_two;

    public function __construct($height_one, $height_two, $rate_one, $rate_two) {
      $this->setHeightOne($height_one);
      $this->setHeightTwo($height_two);
      $this->setRateOne($rate_one);
      $this->setRateTwo($rate_two);

      echo "HeightOne: ", $this->getHeightOne()."\n";
      echo "Growth: ", $this->getRateOne()." per annum\n\n";
      echo "HeightTwo: ", $this->getHeightTwo()."\n";
      echo "Growth: ", $this->getRateTwo()." per annum\n\n";

      $years = 0;
      while($this->getHeightOne() > $this->getHeightTwo()) {
        $this->setHeightOne($this->getRateOne());
        $this->setHeightTwo($this->getRateTwo()); 
        $years++;
      }
      echo "It will take $years years to overcome.";
    }

    private function setHeightOne($height_one) {
      $this->height_one += $height_one;
    }
    private function setHeightTwo($height_two) {
      $this->height_two += $height_two;
    }
    private function setRateOne($rate_one) {
      $this->rate_one = $rate_one;
    }
    private function setRateTwo($rate_two) {
      $this->rate_two = $rate_two;
    }

    private function getHeightOne() {
      return $this->height_one;
    }
    private function getHeightTwo() {
      return $this->height_two;
    }
    private function getRateOne() {
      return $this->rate_one;
    }
    private function getRateTwo() {
      return $this->rate_two;
    }

  }

  $height = new Height(1.63, 1.01, 0.02, 0.04);

  echo "\n\n=======================================================\n\n";
?>