<!-- 16. A typical car can hold four passengers and one driver, allowing five people to travel around. Given n number of people, return how many cars are needed to seat everyone comfortably. -->
<?php
function noOfCars($people)
{
  return ceil($people / 5);
}

echo noOfCars(10);
