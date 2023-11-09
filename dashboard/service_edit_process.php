<?php
// Include file konfigurasi koneksi ke database
include "config.php";

// Tangkap data yang dikirimkan dari formulir
$serviceId = $_POST["inputServiceId"];
$serviceName = $_POST["inputName"];
$serviceDescription = $_POST["inputDescription"];
$gameCategory = $_POST["inputGame"];
$servicePrice = $_POST["inputPrice"];
$serviceStart = $_POST["inputHourStart"];
$serviceEnd = $_POST["inputHourEnd"];

// Query SQL untuk mengupdate data layanan di database
$sql = "UPDATE service 
        SET service_name = '$serviceName', service_description = '$serviceDescription', 
            service_game = '$gameCategory', service_price = $servicePrice, 
            service_start_hour = '$serviceStart', service_end_hour = '$serviceEnd' 
        WHERE service_id = $serviceId";

// Jalankan query SQL
if ($conn->query($sql) === TRUE) {
    echo "Data berhasil diupdate";
    header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi database
$conn->close();
?>
