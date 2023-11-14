<?php
include "config.php";
session_start();

$serviceId = $_POST["inputServiceId"];
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

// Memeriksa apakah gambar baru diunggah
if (!empty($_FILES["inputFile"]["name"])) {
    // Hapus gambar lama jika ada
    $oldImageFileName = $_POST["oldImageFileName"];
    if (!empty($oldImageFileName)) {
        unlink("uploads/" . $oldImageFileName);
    }

    // Mendapatkan ekstensi file
    $fileExtension = pathinfo($_FILES["inputFile"]["name"], PATHINFO_EXTENSION);

    // Membuat nama file baru dengan format: service_id_timestamp.extension
    $newImageFileName = $serviceId . "_" . time() . "." . $fileExtension;

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

// Query SQL untuk memperbarui data service
$sql = "UPDATE service SET 
        service_name = '$serviceName', 
        service_description = '$serviceDescription', 
        service_game = '$gameCategory', 
        service_price = '$servicePrice', 
        service_start_hour = '$serviceStart', 
        service_end_hour = '$serviceEnd'";

// Tambahkan kolom gambar baru jika ada
if (!empty($newImageFileName)) {
    $sql .= ", detail_image = '$newImageFileName'";
}

$sql .= " WHERE service_id = '$serviceId' AND vendor_id = '$vendorId'";

// Jalankan query SQL
if ($conn->query($sql) === TRUE) {
    echo "Data berhasil diperbarui";
    header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi database
$conn->close();
?>
