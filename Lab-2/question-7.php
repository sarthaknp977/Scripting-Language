<!-- 7. Create a function that takes voltage and current and returns the calculated power -->

<?php
function calculatePower($voltage, $current)
{
  $power = $voltage * $current;
  return $power;
}


$voltage = 230;
$current = 10;

$power = calculatePower($voltage, $current);

echo "The power is: " . $power . " watts.";
?>