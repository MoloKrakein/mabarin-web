<?php
include "config.php";
session_start();
$vendorId = $_SESSION['vendor_id'];

$serviceName = $_POST["inputName"];
$serviceDescription = $_POST["inputDescription"];
$gameCategory = $_POST["inputGame"];
$servicePrice = $_POST["inputPrice"];
$serviceStart = $_POST["inputHourStart"];
$serviceEnd = $_POST["inputHourEnd"];

// Jika gambar diunggah
if (!empty($_FILES["inputFile"]["name"])) {
    // Direktori tempat menyimpan gambar yang diunggah
    $uploadDir = "uploads/";

    // Nama file baru, diambil dari timestamp untuk menghindari nama file yang sama
    $newFileName = time() . '_' . $_FILES["inputFile"]["name"];
    $uploadPath = $uploadDir . $newFileName;

    // Pindahkan gambar yang diunggah ke direktori uploads
    if (move_uploaded_file($_FILES["inputFile"]["tmp_name"], $uploadPath)) {
        echo "Gambar berhasil diunggah.";

        // Query SQL untuk menyimpan data ke database
        $sql = "INSERT INTO service (vendor_id, service_name, service_description, service_game, service_price, service_start_hour, service_end_hour, detail_image) VALUES ('$vendorId', '$serviceName', '$serviceDescription', '$gameCategory', '$servicePrice', '$serviceStart', '$serviceEnd', '$newFileName')";

        // Jalankan query SQL
        if ($conn->query($sql) === TRUE) {
            echo " Data berhasil disimpan.";
            echo "Gambar berhasil diunggah.";
            header('Location: index.php');
        } else {
            echo " Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Gagal mengunggah gambar.";
    }
} else {
    // Jika gambar tidak diunggah
    // Query SQL untuk menyimpan data ke database tanpa menyertakan kolom detail_image
    $sql = "INSERT INTO service (vendor_id, service_name, service_description, service_game, service_price, service_start_hour, service_end_hour) VALUES ('$vendorId', '$serviceName', '$serviceDescription', '$gameCategory', '$servicePrice', '$serviceStart', '$serviceEnd')";

    // Jalankan query SQL
    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan.";
        echo "Gambar tidak diunggah.";
        header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Tutup koneksi database
$conn->close();
?>
