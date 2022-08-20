<?php
  echo "\n\n=======================================================\n\n";
  
  final class Words {
    private $word;
    private $number;

    public function __construct($word, $number) {
      $this->setWord($word);
      $this->setNumber($number);

      for($count = $this->getNumber(); $count >= 0; $count--) {
        for($event = 0; $event < $this->getNumber() - $count; $event++) {
          echo $this->getWord()." ";
        }
        echo "\n";
      }
    }

    private function setWord($word) {
      $this->word = $word;
    }
    private function setNumber($number) {
      $this->number = $number;
    }

    private function getWord() {
      return $this->word;
    }
    private function getNumber() {
      return $this->number;
    }
  }

  $word = new Words('Computação', 11);

  echo "\n\n=======================================================\n\n";
?>