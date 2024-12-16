<!-- 28. Write PHP Script to create and login form to implement session and cookie. -->

<?php
session_start();

$valid_username = "username";
$valid_password = "password";


$error_message = "";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];


  if ($username === $valid_username && $password === $valid_password) {

    $_SESSION['username'] = $username;


    if (isset($_POST['remember_me'])) {
      setcookie('username', $username, time() + (30 * 24 * 60 * 60), "/");
    }
    echo "Login successful";
    exit;
  } else {
    $error_message = "Invalid username or password.";
  }
}


if (isset($_GET['logout'])) {

  session_destroy();
  setcookie('username', '', time() - 3600, '/');
  echo "Logout successful";
  exit;
}


if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
} elseif (isset($_COOKIE['username'])) {
  $username = $_COOKIE['username'];

  $_SESSION['username'] = $username;
} else {
  $username = null;
}

?>


<h1>Login and Session/Cookie Example</h1>

<?php if ($username): ?>

  <h2>Welcome, <?= $username ?>!</h2>
  <p><a href="?logout=true">Logout</a></p>
<?php else: ?>

  <h2>Login Form</h2>


  <?php if ($error_message): ?>
    <p style="color:red;"><?= $error_message ?></p>
  <?php endif; ?>

  <form method="POST">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>

    <label for="remember_me">
      <input type="checkbox" id="remember_me" name="remember_me"> Remember Me
    </label><br><br>

    <button type="submit">Login</button>
  </form>
<?php endif; ?>