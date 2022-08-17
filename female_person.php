<?php
  echo "\n-------------------------------------------------------\n";

  class Person {
    private $name;
    private $yearsLived;
    private $identifier;

    public function __construct($name, $yearsLived, $identifier) {
      $this->setName($name);
      $this->setYearsLived($yearsLived);
      $this->setIdentifier($identifier);

      $this->getDetails();
    }

    public function getDetails() {
      if($this->identifier === 'F' && $this->yearsLived < 25) {
        echo $this->getName().", ".$this->getYearsLived().", ". $this->getIdentifier()."\n"; 
        echo "PERFIL ACEITO";
      } else {
        echo "NÃO ACEITA";
      }
    }

    public function setName($name) {
      $this->name = $name;
    }
    public function setYearsLived($yearsLived) {
      $this->yearsLived = $yearsLived;
    }
    public function setIdentifier($identifier) {
      $this->identifier = $identifier;
    }

    public function getName() {
      return $this->name;
    }
    public function getYearsLived() {
      return $this->yearsLived;
    }
    public function getIdentifier() {
      return $this->identifier;
    }
  }

  $person = new Person('Kevison', 19, 'M');

  echo "\n-------------------------------------------------------\n\n";
?>