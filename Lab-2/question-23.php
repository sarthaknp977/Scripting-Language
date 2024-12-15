<!-- 23. Write a PHP program to check the largest number among three given integers. -->
<?php
function largestAmongThree($num1, $num2, $num3)
{
  return ($num1 > $num2 && $num1 > $num3) ? $num1 : (($num2 > $num3) ? $num2 : $num3);
}

echo largestAmongThree(10, 20, 30);  // Outputs: 30
?>