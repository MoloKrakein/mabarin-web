<?php
include "config.php";
session_start();

$serviceName = $_POST["inputName"];
$serviceDescription = $_POST["inputDescription"];
$gameCategory = $_POST["inputGame"];
$servicePrice = $_POST["inputPrice"];
$serviceStart = $_POST["inputHourStart"];
$serviceEnd = $_POST["inputHourEnd"];

// Mendapatkan vendor_id dari sesi
$vendorId = $_SESSION['vendor_id'];

// Variabel untuk menyimpan nama file gambar baru
$newImageFileName = "";

// Memeriksa apakah gambar diunggah
if (!empty($_FILES["inputFile"]["name"])) {
    // Mendapatkan ekstensi file
    $fileExtension = pathinfo($_FILES["inputFile"]["name"], PATHINFO_EXTENSION);

    // Membuat nama file baru dengan format: service_id_timestamp.extension
    $newImageFileName = time() . "." . $fileExtension;

    // Menyimpan file baru
    $uploadPath = "uploads/" . $newImageFileName;
    if (move_uploaded_file($_FILES["inputFile"]["tmp_name"], $uploadPath)) {
        // File berhasil diunggah
    } else {
        // Gagal mengunggah file
        echo "Gagal mengunggah gambar. Silakan cek izin direktori dan ukuran file.";
        exit();
    }
}

// Query SQL untuk menambahkan data service
$sql = "INSERT INTO service (vendor_id, service_name, service_description, service_game, service_price, service_start_hour, service_end_hour, detail_image) 
        VALUES ('$vendorId', '$serviceName', '$serviceDescription', '$gameCategory', '$servicePrice', '$serviceStart', '$serviceEnd', '$newImageFileName')";

// Jalankan query SQL
if ($conn->query($sql) === TRUE) {
    echo "Layanan berhasil ditambahkan";
    header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi database
$conn->close();
?>
