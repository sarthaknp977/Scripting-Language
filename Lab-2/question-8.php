<?php
function countLegs()
{

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $noOfChicken = trim($_POST['chicken']);
    $noOfCow = trim($_POST['cows']);
    $noOfPig = trim($_POST['pigs']);
    if (empty($noOfChicken) || empty($noOfCow) || empty($noOfPig)) {
      echo "<h1 style='color:red;'>All fields are required.</h1>";
    } elseif ($noOfChicken < 0 || $noOfCow < 0 || $noOfPig < 0) {
      echo "<h1 style='color:red;'>Please enter positive numbers.</h1>";
    } else {
      $totalLegs = ($noOfChicken * 2) + ($noOfCow * 4) + ($noOfPig * 4);
      echo "<h2>Total number of legs: $totalLegs</h2>";
    }
  }
}
?>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 50px;
  }

  form {
    margin-bottom: 20px;
  }

  input {
    margin: 5px;
    padding: 8px;
    font-size: 14px;
  }

  h2 {
    color: green;
  }
</style>

<h1>Calculate Total Number of Legs of the Animals</h1>

<form method="POST">
  <label for="chicken">Enter number of chickens:</label>
  <input type="number" name="chicken" id="chicken" placeholder="Number of chickens" min="0" required><br>

  <label for="cows">Enter number of cows:</label>
  <input type="number" name="cows" id="cows" placeholder="Number of cows" min="0" required><br>

  <label for="pigs">Enter number of pigs:</label>
  <input type="number" name="pigs" id="pigs" placeholder="Number of pigs" min="0" required><br>

  <button type="submit">Calculate Legs</button>
</form>

<?php
countLegs();
?>

</body>

</html>