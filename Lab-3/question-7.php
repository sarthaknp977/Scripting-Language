<?php
// Implement interface in PHP with specific properties (e.g., radius for Circle class and side  for Square class) to ensure that multiple classes provide their own implementations of a  method (e.g., calculateArea), while leveraging these properties for calculations.

interface ShapeInterface {
  public function calculateArea();
}

class Circle implements ShapeInterface {
  public $radius;

  function __construct($radius) {
    if ($radius > 0)
      $this->radius = $radius;
    else
      echo "Radius must be greater than zero";
  }

  function calculateArea() {
    return pi() * $this->radius ** 2;
  }
}


class Square implements ShapeInterface {
  public $side;


  public function __construct($side) {
    if ($this->side > 0) {
      $this->side = $side;
    }
  }
  public function calculateArea() {
    return $this->side ** 2;
  }
}
