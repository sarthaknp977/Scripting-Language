<!-- 22. Write a PHP program to create a new string taking the first 3 characters of a given string and return the string with those characters added at both the front and back. If the given string length is less than 3, use whatever characters are there.
Sample Input:

"Python"
"JS"
"Code"

Sample Output:

PytPythonPyt
JSJSJS
CodCodeCod -->

<?php
function add3StringToFrontAndBack($string)
{
  $first3Chars = substr($string, 0, 3);
  return $first3Chars . $string . $first3Chars;
}
echo add3StringToFrontAndBack("code");
