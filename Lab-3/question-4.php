
<?php

// Create a class called Product.
class Product {
  // The class should have 3 properties: $description, $quantity and $price Create constructor
  private $description, $quantity, $price;
  // Create constructor method accepting 3 arguments ($description, $quantity and $price). 
  function __construct($description, $quantity, $price) {
    // In the constructor, when setting these arguments, check if the description is a string and if the quantity and  price are numbers. 
    if (is_string($description) && is_numeric($quantity) && is_numeric($price)) {
      $this->description = $description;
      $this->quantity = $quantity;
      $this->price = $price;
    } else {
      // If they are not, print an error message.
      echo "Error: description, quantity and price must be of type string and numeric.";
    }
  }

  // Create setter and getter methods for the $description, $quantity and $price properties.
  function setDescription($description) {
    $this->description = $description;
  }

  function getDescription() {
    return $this->description;
  }

  function setQuality($quantity) {
    $this->quantity = $quantity;
  }

  function getQuantity() {
    return $this->quantity;
  }

  function setPrice($price) {
    $this->price = $price;
  }

  function getPrice() {
    return $this->price;
  }

  // Create a method called calculatePrice() that will return the product’s price as: $quantity *
  // $price; 

  public function calculatePrice() {
    return $this->quantity * $this->price;
  }
  // Create an object from the Product class. Print all properties in newlines and then print the result from the calculatePrice() method. 


}

$product = new Product("Sample Product", 10, 20);


echo "Description: " . $product->getDescription() . "\n";

echo "Quantity: " . $product->getQuantity() . "\n";

echo "Price: " . $product->getPrice() . "\n";


echo "Calculated Price: " . $product->calculatePrice() . "\n";
