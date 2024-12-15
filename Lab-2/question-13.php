<!-- 13. Write a function that accepts base (decimal), height (decimal), and shape ("triangle", "parallelogram") as input and calculates the area of the shape. -->
<?php
function calculateArea($base, $height, $shape)
{
  switch ($shape) {
    case "triangle":
      return 0.5 * $base * $height;
    case "parallelogram":
      return $base * $height;
    default:
      return "Invalid shape.";
  }
}

echo calculateArea(5, 5, "triangle") . "<br>";
echo calculateArea(5, 5, "parallelogram");
