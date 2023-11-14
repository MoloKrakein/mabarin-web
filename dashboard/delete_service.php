<?php
// Include file konfigurasi koneksi ke database
include "config.php";
session_start();

// Tangkap id service yang akan dihapus
$serviceId = $_GET["service_id"];

// Query SQL untuk mendapatkan nama file gambar yang terkait dengan service
$sqlGetFileName = "SELECT detail_image FROM service WHERE service_id = '$serviceId'";
$result = $conn->query($sqlGetFileName);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $fileName = $row['detail_image'];

    // Hapus file gambar dari direktori upload
    $uploadPath = "upload/";
    $filePath = $uploadPath . $fileName;
    if (file_exists($filePath)) {
        unlink($filePath); // Hapus file dari direktori
    }
}

// Query SQL untuk menghapus service dari database
$sqlDeleteService = "DELETE FROM service WHERE service_id = '$serviceId'";
if ($conn->query($sqlDeleteService) === TRUE) {
    echo "Service berhasil dihapus";
    header('Location: index.php');
} else {
    echo "Error: " . $sqlDeleteService . "<br>" . $conn->error;
}

// Tutup koneksi database
$conn->close();
?>
