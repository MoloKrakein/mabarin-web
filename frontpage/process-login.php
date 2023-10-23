<?php
        // Connect to the database
        $host = "localhost";
        $database = "mabarin";
    
        $username = "root";
        $password = "";
    
        $conn = mysqli_connect($host, $username, $password, $database);
    
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Get the user input from the form
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];

        // Check if the passwords match
        if ($password != $confirm_password) {
            die("Passwords do not match");
        }

        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert the user data into the database
        $sql = "INSERT INTO customer (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

        if ($conn->query($sql) === TRUE) {
            echo "Registration successful";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        ?>