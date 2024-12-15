<?php
function calculateScore()
{
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $wins = trim($_POST['win']);
    $losses = trim($_POST['loss']);
    $draws = trim($_POST['draw']);

    if (!is_numeric($wins) || !is_numeric($losses) || !is_numeric($draws)) {
      echo "Please enter valid numbers for wins, losses, and draws.";
    } elseif ($wins < 0 || $losses < 0 || $draws < 0) {
      echo "Please enter non-negative numbers.";
    } else {
      $totalPoints = ($wins * 3) + ($draws * 1) + ($losses * 0);
      echo "Total points: " . $totalPoints;
    }
  }
}

?>


<h1>Football Team Points Calculator</h1>

<form method="post">
  <input type="number" name="win" id="win" placeholder="Enter wins" required><br><br>
  <input type="number" name="loss" id="loss" placeholder="Enter losses" required><br><br>
  <input type="number" name="draw" id="draw" placeholder="Enter draws" required><br><br>
  <input type="submit" value="Calculate Score" />
</form>

<?php
calculateScore();
?>

</body>