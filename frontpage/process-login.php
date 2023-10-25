<?php
        // Start the session
        session_start();

        // Connect to the database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mabarin";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Get the user input
        $email = $_POST['email'];
        $password = $_POST['password'];
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "SELECT * FROM `customer` WHERE `customer_email` = '$email'";
        $result = mysqli_query($conn, $sql);


        // Check if the user exists
        if (mysqli_num_rows($result) == 1) {
            // User exists, set session variables and redirect to home page
            $row = mysqli_fetch_assoc($result);
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_email'] = $row['email'];
            header("Location: index.html");
        } else {
            // User does not exist, redirect to login page with error message
            echo "Invalid email or password";
            $_SESSION['login_error'] = "Invalid email or password";
            header("Location: login.php");
        }

        // Close the database connection
        mysqli_close($conn);
        ?>