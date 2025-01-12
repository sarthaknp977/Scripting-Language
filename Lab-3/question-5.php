<?php

//  Create an interface HasInfo that will have one abstract method called getInfo().
interface HasInfo {
  public function getInfo();
}
//  Create a class called Address that implements the HasInfo interface. 
class Address implements HasInfo {


  // The class  should have 3 public properties: street, number and city. 
  public $street, $number, $city;
  //Set them through the constructor.
  function __construct($street, $number, $city) {
    $this->street = $street;
    $this->number = $number;
    $this->city = $city;
  }
  // The method getInfo() in this class should return: "Address: street $street, number $number, city $city". 
  function getInfo() {
    return "Address: street $this->street, number $this->number city $this->city";
  }
}
// Create a class called Phone that implements the HasInfo interface.
class Phone implements HasInfo {
  //  The class should have 2 public properties: prefix and number. Set them through the constructor.
  public $prefix, $number;
  function __construct($prefix, $number) {
    $this->prefix = $prefix;
    $this->number = $number;
  }
  function getInfo() {
    //  The method getInfo() in this class should return: "Number: $prefix / $number".
    return "Number: $this->prefix/$this->number";
  }
}

//  Create a class called User that implements the HasInfo interface. 
class User implements HasInfo {
  // The class should have 2 public properties: name and surname. 
  public $name, $surname;
  // The class should have 2 private properties: address and phone (instances from the classes above)
  private $address, $phone;

  function __construct($name, $surname, $address, $phone) {
    $this->name = $name;
    $this->surname = $surname;
    $this->address = $address;
    $this->phone = $phone;
  }

  // The getInfo() method in this class should call the getInfo() methods from  the Address and Phone class respectively. 
  //  The output of this method should be:
  // "User: $firstName $lastName Address: street $street, number $number, city $city Number: $prefix / $number"
  function getInfo() {
    return "User: $this->name $this->surname " . $this->address->getInfo()  . $this->phone->getInfo();
  }
}



//  Create 1 objects from each class. Call the getInformation method from the User  object to see the above output.
$address = new Address("Main Street", "123", "New York");
$phone = new Phone("000", "123-456-7890");
$user = new User("John", "Doe", $address, $phone);

echo $user->getInfo();
