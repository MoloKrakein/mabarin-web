<?php
session_start();

require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $password = md5($password);
  $query = "SELECT * FROM customer WHERE email = '$email' AND pass = '$password'";
  $result = mysqli_query($conn, $query);
  $customer_id = mysqli_fetch_assoc($result)['customer_id'];
  if (mysqli_num_rows($result) > 0) {
    $_SESSION['email'] = $email;
    $_SESSION['customer_id'] = $customer_id;
    header('Location: index.php');
  } else {
    $query = "SELECT * FROM vendor WHERE email = '$email' AND pass = '$password'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
      $_SESSION['email'] = $email;
      $_SESSION['vendor'] = true;
      $_SESSION['vendor_id'] = mysqli_fetch_assoc($result)['vendor_id'];
      header('Location: index.php');
    } else {
      echo "Invalid email or password.";
    }
    echo "Invalid email or password.";

  }
}
?>
