<!-- 12. Write a function that returns the length of a string recursively. -->
<?php
function strLength($str)
{
  if ($str === '') {
    return 0;
  } else {
    return 1 + strLength(substr($str, 1));
  }
}

echo strLength('Hello, World!');

