<!-- 27. Write PHP Script to create and validate login form with username and password. -->
 
<?php

$valid_username = 'username';
$valid_password = 'password';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == $valid_username && $password == $valid_password) {
        header("Location: question-1.php"); 
        exit();
    } else {
        $error_message = "Invalid username or password!";
    }
}
 ?>
     <h2>Login Form</h2>

     <?php
     if (!empty($error_message)) {

     echo $error_message;

    }
    ?>

    <form method="POST" >
        <label for="username">Username:</label><br>
        <input type="text" name="username" id="username"  required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password" required><br><br>

        <button type="submit">Login</button>
    </form>


