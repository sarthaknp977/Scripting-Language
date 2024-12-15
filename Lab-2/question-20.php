<!-- 20. Write a PHP program to create a new string which consists of 4 copies of the first 2 characters of a given string. If the given string length is less than 2, return the original string.
Sample Input:

"C Sharp"
"JS"
"a"
Sample Output:

C C C C
JSJSJSJS
a -->
<?php
function copyFirst2String($string)
{
  if (strlen($string) < 2) {
    return $string;
  }

  $first2Chars = substr($string, 0, 2);
  return str_repeat($first2Chars, 4);
}

echo copyFirst2String("a");
