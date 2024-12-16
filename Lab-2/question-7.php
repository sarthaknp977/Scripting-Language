<!-- 7. Create a function that takes voltage and current and returns the calculated power -->

<?php
function calculatePower($voltage, $current)
{
  return $voltage * $current;
}

echo calculatePower(230, 10);

?>