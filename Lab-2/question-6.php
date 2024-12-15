<!-- 6. Create a function that takes the age in years and returns the age in days.
 -->
<?php
function yearsToDays($year)
{
  return ceil($year * 365);
}

echo yearsToDays(1.5);
?>