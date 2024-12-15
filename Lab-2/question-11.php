<!-- 11. Write a function that returns true if an integer is evenly divisible by 5, and false otherwise.-->
<?php


function isDivisibleBy5($value)
{
  return $value % 5 === 0 ? "True" : "False";
}

echo isDivisibleBy5(11);
?>