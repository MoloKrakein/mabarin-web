<?php
session_start();

require_once 'config.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "SELECT * FROM customer WHERE email = '$email'";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);

    if (password_verify($password, $user['pass'])) {
      $_SESSION['email'] = $user['email'];
      $_SESSION['username'] = $user['username'];

      header('Location: index.php');
      exit;
    } else {
      echo 'Invalid password';
    }
  } else {
    // modal gagal login
    echo 'User not found';
  }
}
?>
