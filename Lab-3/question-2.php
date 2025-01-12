<?php

// 2. Create a class called Bicycle.
class Bicycle {
  //  The class should have 5 public properties: $brand, $model, $year, $description
  // and $weight. Default value for the $description property is “Used bicycle” (hint:
  // you can set it either when declaring the property or through the constructor).
  public $brand, $model, $year, $description, $weight;

  public  function __construct(
    $brand,
    $model,
    $year,
    $description = "Used bicycle",
    $weight
  ) {
    $this->brand = $brand;
    $this->model = $model;
    $this->year = $year;
    $this->description = $description;
    $this->setWeight($weight);
  }

  // Create getInfo method (a getter) that will return information about the bike in the
  // following format: “$brand $model ($year)”.
  public function getInfo() {
    return "$this->brand $this->model ($this->year)";
  }


  //  Create getWeight method 
  public function getWeight($inKg = false) {

    // that will return weight in grams.  Make this method
    // configurable so that it accepts one argument which by default is false. If it is true,
    // the weight should be returned in kilograms and if it is false (default), it should
    // return weight in grams.
    if ($inKg)
      return $this->weight;
    return $this->weight / 1000;
  }


  //  Create a setter method for the weight property. The



  // weight property stores the weight in grams. 
  public function setWeight($weight) {
    if ($weight < 0) {
      throw new InvalidArgumentException("Weight cannot be negative.");
    }
    $this->weight = $weight;
  }
}
// Create two objects from the Bicycle class and set values for all properties. 
$bike1 = new Bicycle("Giant", "Escape 3", 2022, 12000, "A lightweight city bike suitable for urban commutes.");
$bike2 = new Bicycle("Trek", "Domane AL 2", 2023, 9500, "An endurance road bike designed for long rides.");

// Print bike information
echo $bike1->getInfo();
echo $bike2->getInfo();

// Print bike weights in kilograms
echo "Bike 1 weight (kg): " . $bike1->getWeight(true);
echo "Bike 2 weight (kg): " . $bike2->getWeight(true);

// Print bike weights in grams
echo "Bike 1 weight (grams): " . $bike1->getWeight();
echo "Bike 2 weight (grams): " . $bike2->getWeight();
