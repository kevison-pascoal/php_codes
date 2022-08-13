<?php
  echo "\n=======================================================\n\n";

  class Manufactor {
    private $manufactor;

    public function __construct($manufactor) {
      $this->setManufactor($manufactor);
    }
    
    private function setManufactor($manufactor) {
      $this->manufactor = $manufactor;
    } 
    public function getManufactor() {
      return $this->manufactor;
    }
  }

  class Product {
    private $id;
    private $product;
    private $category;
    private $price;

    public function __construct($id, $product, $category, $price, $manufactor) {
      $manufactor_generator = new Manufactor($manufactor);
      $this->setId($id);
      $this->setProduct($product);
      $this->setCategory($category);
      $this->setPrice($price);

      echo "--------------------------\n";
      echo "Id: ".$this->getId()."\n";
      echo "Product: ".$this->getProduct()."\n";
      echo "Category: ".$this->getCategory()."\n";
      echo "Price: $".$this->getPrice()."\n";
      echo "Manufactor: ".$manufactor_generator->getManufactor();
      echo "\n--------------------------\n";
    }

    private function setId($id) {
      $this->id = $id;
    }
    private function setProduct($product) {
      $this->product = $product;
    }
    private function setCategory($category) {
      $this->category = $category;
    }
    private function setPrice($price) {
      $this->price = $price;
    }

    private function getId() {
      return $this->id;
    }
    private function getProduct() {
      return $this->product;
    }
    private function getCategory() {
      return $this->category;
    }
    private function getPrice() {
      return $this->price;
    }
  }
  
  $id = 0;
  $array = array(
    "amount_products" => 10,
    "items" => array(),
  );

  for($index = 0; $index < $array["amount_products"]; $index++) {
    $array["items"][$index] = $index;
  }

  $product_one = new Product($array["items"][$id++], "pencil", "write", 2.8, "World Pencil");
  $product_two = new Product($array["items"][$id++], "gun", "shoot", 389.67, "HeadBuy");
  $product_three = new Product($array["items"][$id++], "knife", "cut", 27.34, "Mr Cuts");
  $product_four = new Product($array["items"][$id++], "program", "tech", 27.348, "Nocten");

  echo "\n=======================================================\n\n";
?>