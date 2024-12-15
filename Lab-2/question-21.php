<!-- 21. Write a PHP program to create a new string with the last character added at both the front and back of a given string.
Sample Input:

"Red"
"Green"
"1"
Sample Output:

dRedd
nGreenn
111 -->
<?php
function addAtFrontAndBack($string)
{
  return $string[strlen($string) - 1] . $string . $string[strlen($string) - 1];
}

echo  addAtFrontAndBack("1");
