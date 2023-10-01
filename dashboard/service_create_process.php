<?php
// Include file konfigurasi koneksi ke database
include "config.php";

// Tangkap data yang dikirimkan dari formulir
$serviceName = $_POST["inputName"];
$serviceDescription = $_POST["inputDescription"];
$gameCategory = $_POST["inputGame"];
$servicePrice = $_POST["inputPrice"];
$serviceStart = $_POST["inputHourStart"];
$serviceEnd = $_POST["inputHourEnd"];

// echo $serviceName;

// Query SQL untuk menyimpan data ke database
$sql = "INSERT INTO service (service_name, service_description, service_game, service_price, service_start_hour, service_end_hour)
        VALUES ('$serviceName', '$serviceDescription', '$gameCategory', '$servicePrice', '$serviceStart', '$serviceEnd')";
// print all variable


// Jalankan query SQL
if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi database
$conn->close();
?>
