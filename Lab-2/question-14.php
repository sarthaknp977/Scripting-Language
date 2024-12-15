<!-- 14. Create a function that takes an array and a string as arguments and returns the index of the string. -->

<?php

function return_index($array, $string)
{

  return "position : " . array_search($string, $array) + 1;
}

$array = ['apple', 'banana', 'cherry', 'date'];
$string = 'banana';


echo return_index($array, $string);
