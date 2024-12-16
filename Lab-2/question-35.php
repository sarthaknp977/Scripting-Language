<!--35. Write PHP script to calculate simple interest using form. -->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $principal = $_POST['principal'];
  $rate = $_POST['rate'];
  $time = $_POST['time'];

  if (!is_numeric($principal) || !is_numeric($rate) || !is_numeric($time)) {
    echo "Please enter valid numbers.";
    exit();
  }
  $simple_interest = ($principal * $rate * $time) / 100;

  echo "Simple Interest: $simple_interest";
}
?>

<form method="post">
  <label for="principal">Principal:</label>
  <input type="number" id="principal" name="principal"><br><br>

  <label for="rate">Rate:</label>
  <input type="number" id="rate" name="rate"><br><br>

  <label for="time">Time:</label>
  <input type="number" id="time" name="time"><br><br>

  <input type="submit" value="Calculate">
</form>