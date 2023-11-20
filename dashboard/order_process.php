<?php
// Include file konfigurasi koneksi ke database
include "config.php";

// Memeriksa apakah form telah dikirimkan

    // Mengambil data dari formulir
    $orderId = $_POST['inputOrderId'];
    // $vendorId = $_POST['inputVendorId'];
    $status = $_POST['inputStatus'];
    $descriptionOrder = $_POST['inputDescriptionOrder'];

    // Query SQL untuk memperbarui data pada tabel order_service
    $updateQuery = "UPDATE order_service 
                    SET status = '$status', description = '$descriptionOrder'
                    WHERE order_id = $orderId";

    // Melakukan eksekusi query
    if ($conn->query($updateQuery) === TRUE) {
        echo "Order successfully updated.";
        header('Location: index.php');
    } else {
        echo "Error updating order: " . $conn->error;
    }


// Menutup koneksi database
$conn->close();
?>
