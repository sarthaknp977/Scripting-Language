<!-- 
2. Calculate area of circle taking radius input and defining value of PI as constant value. 
-->

<?php
function calculateCircleArea($radius)
{
  define('PI', 3.14159);
  return PI * $radius * $radius;
}
echo calculateCircleArea(3212);
?>