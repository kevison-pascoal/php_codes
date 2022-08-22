<?php
  echo "\n\n=======================================================\n\n";
  
  final class Angra {
    private $mass;
    private $time;
    private $percent;
    
    public function __construct($mass, $time, $percent) {
      $this->setMass($mass);
      $this->setTime($time);
      $this->setPercent($percent);
    }
    
    public function getDetails() {
      echo "Mass: ".$this->getMass()."\n";
      echo "Time: ".$this->getTime()."\n";
      echo "Percent: ".$this->getPercent()."\n";

      $this->lossMass($this->getMass());
    }

    private function setMass($mass) {
      $this->mass = $mass;
    }
    private function setTime($time) {
      $this->time = $time;
    }
    private function setPercent($percent) {
      $this->percent = $percent;
    }

    private function lossMass($mass) {
      $loss = 0;
      for($loss; $mass > 0.10; $loss++) {
        $mass = $mass - ($mass * $this->getPercent());
      }
      echo "time taken for mass to reach a value lessa than ".number_format($mass, 3)." was: ".($loss*30)." seconds";
    }

    private function getMass() {
      return $this->mass;
    }
    private function getTime() {
      return $this->time;
    }
    private function getPercent() {
      return $this->percent;
    }

  } 
  
  $angra_dos_reis = new Angra(100, 30, 0.25);
  $angra_dos_reis->getDetails();

  echo "\n\n=======================================================\n\n";
?>