<?php
// Include file konfigurasi koneksi ke database
include "config.php";
session_start();
$vendorId = $_SESSION['vendor_id'];
// Tangkap data yang dikirimkan dari formulir
// $vendorId = $_POST["inputVendorId"];
$serviceName = $_POST["inputName"];
$serviceDescription = $_POST["inputDescription"];
$gameCategory = $_POST["inputGame"];
$servicePrice = $_POST["inputPrice"];
$serviceStart = $_POST["inputHourStart"];
$serviceEnd = $_POST["inputHourEnd"];

// echo $serviceName;

// Query SQL untuk menyimpan data ke database
$sql = "INSERT INTO service (vendor_id, service_name, service_description, service_game, service_price, service_start_hour, service_end_hour) VALUES ('$vendorId', '$serviceName', '$serviceDescription', '$gameCategory', '$servicePrice', '$serviceStart', '$serviceEnd')";
// print all variable


// Jalankan query SQL
if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan";
    header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi database
$conn->close();
?>
