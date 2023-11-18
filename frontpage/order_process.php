<?php
include "config.php";

session_start();

// Pastikan customer sudah login
if (!isset($_SESSION['customer_id'])) {
    echo "Anda Tidak Bisa Mengakses Halaman Ini.";
    exit();
}

// Pastikan mendapatkan service_id dan customer_id dari form atau session
if (isset($_POST['service_id']) && isset($_SESSION['customer_id'])) {
    $service_id = $_POST['service_id'];
    $customer_id = $_SESSION['customer_id'];
    $order_date = date('Y-m-d');
    $description = "New order for service ID: $service_id";
    $status = "Pending";

    // Query SQL untuk insert ke tabel order_service
    $sql = "INSERT INTO order_service (service_id, customer_id, order_date, description, status) 
            VALUES ($service_id, $customer_id, '$order_date', '$description', '$status')";

    if ($conn->query($sql) === TRUE) {
        echo "Order berhasil diproses.";
    } else {
        echo "Error while processing order.";
    }
} else {
    echo "Service ID atau Customer ID tidak valid.";
}
// Tutup koneksi
$conn->close();
?>
