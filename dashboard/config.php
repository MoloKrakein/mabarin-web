<?php
    $host = "localhost";
    $database = "mabarin";

    $username = "root";
    $password = "";

    $conn = mysqli_connect($host, $username, $password, $database);
    // echo "Connected successfully";
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>