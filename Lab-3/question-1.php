<?php

class Car implements Vehicle {
  private $make, $model, $year;
  public function start() {
    echo "Car started";
  }


  public function __construct($make, $model, $year) {
    $this->make = $make;
    $this->model = $model;
    $this->year = $year;
  }

  public function getMake() {
    return $this->make;
  }


  public function setMake($make) {
    $this->make = $make;
  }


  public function getModel() {
    return $this->model;
  }


  public function setModel($model) {
    $this->model = $model;
  }


  public function getYear() {
    return $this->year;
  }


  public function setYear($year) {
    $this->year = $year;
  }



  public function getDescription() {
    echo $this->make;
    echo $this->model;
    echo $this->year;
  }


  public function displayInfo() {
    echo "Model: " . $this->model;
    echo ", Make: " . $this->make;
    echo ", Year: " . $this->year;
  }

  public function startEngine() {
    echo "Engine started";
  }

  public function stopEngine() {
    echo "Engine stopped";
  }
}


class ElectricCar extends Car {
  public $batteryCapacity;

  public function __construct($make, $model, $year, $batteryCapacity) {
    parent::__construct($make, $model, $year);
    $this->batteryCapacity = $batteryCapacity;
  }

  public function charge() {
  }
  public function getDescription() {
    return "This is an electric car with a battery capacity of " . $this->batteryCapacity . " kWh\n";
  }
}

interface Vehicle {
  public  function startEngine();
  public  function stopEngine();
}
