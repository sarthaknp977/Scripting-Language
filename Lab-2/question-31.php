<!-- 31. Write a PHP script to validate and register (store) user with following data.
a. Username with minimum 8 character
b. Valid email Address
c. Validate Date of Birth
d. Valid phone length -->

<?php
// Function to validate username (at least 8 characters)
function validateUsername($username)
{
  if (strlen($username) >= 8) {
    return true;
  }
  return false;
}

// Function to validate email address
function validateEmail($email)
{
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    return true;
  }
  return false;
}

// Function to validate date of birth (must be a valid date)
function validateDateOfBirth($dob)
{
  $date = DateTime::createFromFormat('Y-m-d', $dob);
  return $date && $date->format('Y-m-d') === $dob;
}

// Function to validate phone number (e.g., length 10 digits)
function validatePhone($phone)
{
  if (preg_match('/^\d{10}$/', $phone)) {
    return true;
  }
  return false;
}

// Register User function
function registerUser($username, $email, $dob, $phone)
{
  // Validate the data
  if (!validateUsername($username)) {
    return "Username must be at least 8 characters long.";
  }
  if (!validateEmail($email)) {
    return "Invalid email address.";
  }
  if (!validateDateOfBirth($dob)) {
    return "Invalid date of birth. Use format YYYY-MM-DD.";
  }
  if (!validatePhone($phone)) {
    return "Phone number must be 10 digits long.";
  }

  // Store user data (example: using session for this demo)
  session_start();
  $_SESSION['user'] = [
    'username' => $username,
    'email' => $email,
    'dob' => $dob,
    'phone' => $phone
  ];

  // Return success message
  return "User registered successfully!";
}

// Initialize the result message
$resultMessage = "";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get form data
  $username = $_POST['username'];
  $email = $_POST['email'];
  $dob = $_POST['dob'];
  $phone = $_POST['phone'];

  // Call registerUser function and get the result
  $resultMessage = registerUser($username, $email, $dob, $phone);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Registration</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      background-color: #f9f9f9;
    }

    h1 {
      text-align: center;
    }

    .form-group {
      margin-bottom: 15px;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .btn-submit {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .btn-submit:hover {
      background-color: #45a049;
    }

    .result {
      margin-top: 20px;
      padding: 10px;
      background-color: #f2f2f2;
      border-radius: 4px;
      text-align: center;
    }

    .result.success {
      background-color: #d4edda;
      color: #155724;
    }

    .result.error {
      background-color: #f8d7da;
      color: #721c24;
    }
  </style>
</head>

<body>

  <h1>User Registration</h1>

  <?php if ($resultMessage): ?>
    <div class="result <?= strpos($resultMessage, 'successfully') !== false ? 'success' : 'error' ?>">
      <?= htmlspecialchars($resultMessage) ?>
    </div>
  <?php endif; ?>

  <form method="POST" action="">
    <div class="form-group">
      <label for="username">Username (at least 8 characters):</label>
      <input type="text" id="username" name="username" required minlength="8" value="<?= isset($username) ? htmlspecialchars($username) : '' ?>">
    </div>

    <div class="form-group">
      <label for="email">Email Address:</label>
      <input type="email" id="email" name="email" required value="<?= isset($email) ? htmlspecialchars($email) : '' ?>">
    </div>

    <div class="form-group">
      <label for="dob">Date of Birth (YYYY-MM-DD):</label>
      <input type="date" id="dob" name="dob" required value="<?= isset($dob) ? htmlspecialchars($dob) : '' ?>">
    </div>

    <div class="form-group">
      <label for="phone">Phone Number (10 digits):</label>
      <input type="text" id="phone" name="phone" required pattern="\d{10}" value="<?= isset($phone) ? htmlspecialchars($phone) : '' ?>">
    </div>

    <button type="submit" class="btn-submit">Register</button>
  </form>

</body>

</html>