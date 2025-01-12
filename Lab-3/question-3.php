<?php
// Create a class called Student.
class Student {

  // The class should have:
  //  3 public properties: $name, $surname and $country;
  public  $name, $surname, $country;
  //  1 private property: $tuition;
  private  $tuition;
  //  1 protected property: $indexNumber.
  protected  $indexNumber;

  function __construct($name, $surname, $country) {
    $this->name = $name;
    $this->surname = $surname;
    $this->country = $country;
  }
  // o Create getter methods for the name and the surname of the student. 
  public function getName() {
    return $this->name;
  }
  public function getSurname() {
    return $this->surname;
  }

  // Create a public method helloWorld() that will return “Hello World” string. 
  public function helloWorld() {
    return "Hello World";
  }
  // Create a protected method helloFamily() that will return “Hello Family” string. 
  protected function helloFamily() {
    return "Hello Family";
  }
  public function callHelloFamily() {
    $this->helloFamily();
  }
  // Create a private method helloMe() that will return “Hello me!” string. 
  private function helloMe() {
    return "Hello me!";
  }

  public function callHelloMe() {
    $this->helloMe();
  }
  // Create a private getter method getTuition() that will print the value of the tuition property. 
  private function getTuition() {
    echo $this->tuition;
  }
}


// Do not use a constructor with arguments. 
// Create a subclass PartTimeStudent. 
class partTimeStudent extends Student {

  // Add a public method helloParent() that will call the method helloFamily() from the Student class.
  public function helloParent() {
    return parent::helloFamily();
  }
}
// Create objects from both the Student and the PartTimeStudent classes.


$student = new Student("Sarthak", "GC", "Nepal");
$partTimeStudent = new PartTimeStudent("Sarthak", "GC", "Nepal");

// and call all the methods within. 
echo $student->getName();
echo $student->getSurName();
echo $student->helloWorld();
echo $student->callHelloFamily();
echo $student->callHelloMe();

$partTimeStudent->helloParent();
