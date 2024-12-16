<!-- 1. Write a PHP program to create variable with different data types
Print all the data using echo and print.
Display the content of an array using print_r and var_dump.
Display the result of checking data types using gettype(). -->

<?php
$var_int = 10;
$var_float = 3.14;
$var_string = "Hello, World!";
$var_bool = true;
$var_array = array(1, 2, 3);

echo "Integer: $var_int <br>";
echo "Float: $var_float <br>";
echo "String: $var_string <br>";
echo "Boolean:  " . $var_bool ? 'true' : 'false';
echo "<br>";

echo "Array using print_r: ";
print_r($var_array);
echo "<br>";

echo "Array using var_dump: ";
var_dump($var_array);
echo "<br>";

echo "var_int : " . gettype($var_int) . "<br>";
echo "var_float : " . gettype($var_float) . "<br>";
echo "var_string : " . gettype($var_string) . "<br>";
echo "var_bool : " . gettype($var_bool) . "<br>";
echo "var_array : " . gettype($var_array) . "<br>";
?>