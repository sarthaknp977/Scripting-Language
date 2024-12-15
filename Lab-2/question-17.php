<!-- 17. Write a PHP program to compute the sum of the two given integer values. If the two values are the same, then returns triple their sum. -->
<?php
function computeSum($a, $b)
{
  if ($a === $b) {
    return 3 * ($a + $b);
  } else {
    return $a + $b;
  }
}

echo computeSum(100, 10);
