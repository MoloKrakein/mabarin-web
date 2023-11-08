<?php
session_start();

require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $password = md5($password);
  // $hashed_password = md5($password);
  $query = "SELECT * FROM customer WHERE email = '$email' AND pass = '$password'";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) > 0) {
    $_SESSION['email'] = $email;
    header('Location: index.php');
  } else {
    // echo "Invalid email or password.";
    $getpass = "SELECT pass FROM customer WHERE email = '$email'";
    $result = mysqli_query($conn, $getpass);
    $row = mysqli_fetch_assoc($result);

    // echo $hashed_password;
    echo $password;
    echo "<br>";
    echo $row['pass'];

  }
}
?>
