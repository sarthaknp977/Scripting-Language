<!-- 18. Write a PHP program to get the absolute difference between n and 51. If n is greater than 51 return triple the absolute difference. -->
<?php
function get_absolute_diff($n)
{
  $diff = abs($n - 51);
  return $n > 51 ? 3 * $diff : $diff;
}

echo get_absolute_diff(122);
