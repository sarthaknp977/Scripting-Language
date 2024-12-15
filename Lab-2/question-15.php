<!-- 15. Given an index and an array, return the value of the array with the given index. -->
<?php
function returnValue($index, $array)
{
  return $array[$index];
}


echo returnValue(0, [1, 2, 3, 4, 5, 6]);
