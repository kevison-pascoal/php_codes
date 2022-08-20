<?php 
  echo "\n\n=======================================================\n\n";
  
  final class UntilProduct {
    private $number;
    private $product;

    public function __construct($number) {
      $this->setNumber($number);
      $this->setProduct();

      for($count = 0; $count <= $this->product; $count++) {
        echo $count." "; 
      }
    }

    private function setNumber($number) {
      $this->number = $number;
    }
    private function setProduct() {
      $this->product = pow($this->getNumber(), 2);
    }
    private function getNumber() {
      return $this->number;
    }
  }
  final class Sun {
    private $number;

    public function __construct($number) {
      $this->setNumber($number);
      for($count = 0; $count < $number; $count++) {
        echo "SOL";
      }
    }

    private function setNumber($number) {
      $this->number = $number;
    }
  }

  $until = new UntilProduct(123);
  echo "\n";
  $sun = new Sun(0);
  
  echo "\n\n=======================================================\n\n";
?>