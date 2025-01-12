<?php
// Create 3 classes – User, AdminUser and Customer.
class User {
  // class User Should have 3 protected properties: $name , $surname and $username;
  // Add 1 protected property $is_admin. Its default value should be false;

  protected $name, $surname, $username, $is_admin;

  //  Set their values using a constructor method;
  //  Add 1 protected property $is_admin. Its default value should be false;

  function __construct($name, $surname, $username, $is_admin = false) {
    $this->name = $name;
    $this->surname = $surname;
    $this->username = $username;
    $this->is_admin = $is_admin;
  }

  //  Create a method that checks if the user is admin;
  public function is_admin() {
    return $this->is_admin;
  }

  //  Create a method that prints the user’s full name. If the user is admin,
  // print (admin) at the end.

  function print_full_name() {
    echo $this->name . " " . $this->surname . ($this->is_admin() ? " (admin)" : "");
  }
}

// class Customer Should extend the User class;

class Customer extends User {
  //  Add 3 private properties: $city, $state, $country;
  private  $city, $state, $country;
  // The Customer’s class constructor should have the same parameters as the parent constructor;
  function __construct($name, $surname, $username, $city, $state, $country) {
    parent::__construct($name, $surname, $username);
    $this->city = $city;
    $this->state = $state;
    $this->country = $country;
  }


  //  For the other properties create setter and getter methods;
  public function getCity() {
    return $this->city;
  }
  public function setCity($city) {
    $this->city = $city;
  }
  public function getState() {
    return $this->state;
  }
  public function setState($state) {
    $this->state = $state;
  }
  public function getCountry() {
    return $this->country;
  }
  public function setCountry($country) {
    $this->country = $country;
  }
  //  Create a method location() that returns ‘$city, $state, $country’.
  public function location() {
    return $this->city . ", " . $this->state . ", " . $this->country;
  }
}


// class AdminUser Should extend the User class;

class AdminUser extends User {
  //  The constructor should have the same parameters as the parent constructor;
  function __construct($name, $surname, $username) {
    //  The constructor should set the value of the $is_admin property to true.
    parent::__construct($name, $surname, $username, true);
  }
}

// Print the full name and is_admin values for each object
$user1 = new User("John", "Doe", "john_doe");
$customer1 = new Customer("Jane", "Smith", "jane_smith", "New York", "NY", "USA");
$admin1 = new AdminUser("Alice", "Johnson", "alice_johnson");

// Print full name and is_admin values for each object
echo $user1->print_full_name();  // John Doe
echo $admin1->print_full_name();  // Alice Johnson (admin)

// and additionally the location (city, state and country) for the customer objects only.
echo $customer1->print_full_name(); // Jane Smith
echo $customer1->location() . "\n"; // New York, NY, USA
