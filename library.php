<?php 
  echo "\n\n=======================================================\n\n";
  final class Library {
    private $name;
    private $type;
    private $book;

    public function __construct($name, $type, $book) {
      $this->setType($type);
      $this->setBook($book);
      $this->setName($name);

      if($type === "Professor" or $type === "professor") {
        echo $this->getType()." ".$this->getName()." tem 10 dias para entregar ".$this->getBook();
      } else if($type === "Aluno" or $type === "aluno") {
        echo $this->getType()." ".$this->getName()." tem 3 dias para entregar ".$this->getBook();
      } else {
        echo "Entregue suas informações corretamente!";
      }
    }

    private function setName($name) {
     $this->name = $name; 
    }
    private function setType($type) {
      $this->type = $type;
    }
    private function setBook($book) {
      $this->book = $book;
    }

    private function getName() {
      return $this->name;
    }
    private function getType() {
      return $this->type;
    }
    private function getBook() {
      return $this->book;
    }
  }

  $library_1 = new Library("Thiago", "Professor", "The Lord Of Rings");
  echo "\n";
  $library_2 = new Library("Kevison", "Aluno", "Corações Em Fase Terminal");

  echo "\n\n=======================================================\n\n";
?>