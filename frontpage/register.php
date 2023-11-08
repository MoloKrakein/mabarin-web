<?php
// Import the database configuration
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Check if email already exists
  $sql = "SELECT * FROM customer WHERE email = '$email'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    echo "Email already exists!";
    exit;
  }

  // Hash the password for security
  $hashed_password = md5($password);

  // Prepare the SQL statement to insert the data into the customer table
  $sql = "INSERT INTO customer (email, pass) VALUES ('$email', '$hashed_password')";

  // Execute the statement
  $result = $conn->query($sql);

  // Check if the insertion was successful
  if ($result) {
    echo "Registration successful!";
    header('Location: index.php');
  } else {
    echo "Registration failed.";

  }

  // Close the database connection
  $conn->close();
}
?>
