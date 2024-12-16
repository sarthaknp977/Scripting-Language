<!-- 14. Create a function that takes an array and a string as arguments and returns the index of the string. -->

<?php

function return_index($array, $string)
{

  return "index : " . array_search($string, $array) ;
}

$array = ['apple', 'banana', 'cherry', 'date'];
$string = 'apple';


echo return_index($array, $string);
