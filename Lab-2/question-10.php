<!-- 10. Write a function that takes two strings as arguments and returns either true or false depending on whether the total number of characters in the first string is equal to the total number of characters in the second string. -->

<?php
function compareStrings($str1, $str2)
{

  return strlen($str1) == strlen($str2) ? "True" : "False";
}

echo compareStrings("hi", "no");
echo compareStrings("h", "no");
?>