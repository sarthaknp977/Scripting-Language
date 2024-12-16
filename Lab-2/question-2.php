<!-- 
2. Calculate area of circle taking radius input and defining value of PI as constant value. 
-->
<?php

define("PI", 3.14159);

function calculateArea($radius)
{
  return PI * $radius * $radius;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $radius = trim($_POST["radius"]);
  if ($radius > 0) {
    $area = calculateArea($radius);
    echo "The area of the circle with radius $radius is: $area";
  } else {
    echo "Please enter a valid positive radius.";
  }
}
?>

<h1>Calculate the Area of a Circle</h1>
<form method="POST">

  <input type="number" placeholder="Enter the radius" name="radius" id="radius" step="any" required>
  <button type="submit">Calculate Area</button>
</form>