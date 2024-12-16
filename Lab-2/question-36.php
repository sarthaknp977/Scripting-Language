<!-- 36. Write PHP script to calculate tax using form. -->


<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $income = $_POST['income'];
  $marital_status = $_POST['marital_status'];
  $gender = $_POST['gender'];

  if (!is_numeric($income)) {
    echo "Please enter valid income.";
    exit();
  }

  if ($marital_status == 'unmarried') {
    if ($income <= 400000) {
      $tax = 0.01 * $income;
    } else if ($income <= 500000) {
      $tax = 0.01 * 400000 + 0.10 * ($income - 400000);
    } else if ($income <= 750000) {
      $tax = 0.01 * 400000 + 0.10 * 100000 + 0.20 * ($income - 500000);
    } else if ($income <= 1300000) {
      $tax = 0.01 * 400000 + 0.10 * 100000 + 0.20 * 250000 + 0.30 * ($income - 750000);
    } else if ($income > 1300000) {
      $tax = 0.01 * 400000 + 0.10 * 100000 + 0.20 * 250000 + 0.30 * 550000 + 0.35 * ($income - 1300000);
    }
  }

  if ($marital_status == 'married') {
    if ($income <= 450000) {
      $tax = 0.01 * $income;
    } else if ($income <= 550000) {
      $tax = 0.01 * 450000 + 0.10 * ($income - 450000);
    } else if ($income <= 750000) {
      $tax = 0.01 * 450000 + 0.10 * 100000 + 0.20 * ($income - 550000);
    } else if ($income <= 1300000) {
      $tax = 0.01 * 450000 + 0.10 * 100000 + 0.20 * 250000 + 0.30 * ($income - 750000);
    } else if ($income > 1300000) {
      $tax = 0.01 * 450000 + 0.10 * 100000 + 0.20 * 250000 + 0.30 * 550000 + 0.35 * ($income - 1300000);
    }
  }
  if ($gender == 'female') {
    $tax = 0.9 * $tax;
  }
  echo $tax;
  // 1%*400000 +  100000*10% + 250000*20% +250000*30% = 139k
  // 4000 +       10k +        50k +       75k 

}


?>

<form method="post">
  <label for="income">Annual Income:</label>
  <input type="number" id="income" name="income"><br><br>

  <label for="marital_status">Marital Status:</label>
  <select id="marital_status" name="marital_status">
    <option value="married">Married</option>
    <option value="unmarried">Unmarried</option>
  </select><br><br>

  <label for="gender">Gender:</label>
  <select id="gender" name="gender">
    <option value="male">Male</option>
    <option value="female">Female</option>
  </select><br><br>

  <input type="submit" value="Calculate Tax">
</form>