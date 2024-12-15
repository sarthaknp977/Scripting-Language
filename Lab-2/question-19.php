<!-- 19. Write a PHP program to create a new string where 'if' is added to the front of a given string. If the string already begins with 'if', return the string unchanged.
Sample Input:
"if else"
"else"
"if"
Sample Output:
if else
if else
if-->

<?php

function addIf($str)
{
  $str = trim($str);
  if (substr($str, 0, 2) == "if") {
    return $str;
  } else {
    return "if " . $str;
  }
}

echo addIf("else");
