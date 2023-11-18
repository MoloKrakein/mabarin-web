<?php
include "config.php";

// Pastikan mendapatkan ID layanan dari AJAX
if (isset($_POST['service_id'])) {
    $service_id = $_POST['service_id'];

    // Query SQL untuk mengambil data dari service_detail berdasarkan ID
    $sql = "SELECT * FROM service_detail WHERE service_id = $service_id";
    $result = $conn->query($sql);

    // Pastikan ada hasil dari query
    if ($result->num_rows > 0) {
        $service = $result->fetch_assoc();
        // Tampilkan informasi layanan dalam bentuk HTML
        echo '<form action="order_process.php" method="post">
                  <div class="row">
                      <div class="col-12">
                          <strong>Service Name:</strong> ' . $service['service_name'] . '<br>
                          <strong>Service Type:</strong> ' . $service['service_type'] . '<br>
                          <strong>Game:</strong> ' . $service['service_game'] . '<br>
                          <strong>Price:</strong> Rp ' . number_format($service['service_price'], 0, ',', '.') . '<br>
                          <strong>Service Description:</strong><br> ' . $service['service_description'] . '<br><br>
                          <img src="../dashboard/uploads/' . basename($service['detail_image']) . '" alt="No Image Available" style="height: 250px; width: auto;">
                          <input type="hidden" name="service_id" value="' . $service['service_id'] . '">
                      </div>
                  </div>
                  <div class="row mt-3">
                      <div class="col-12">
                          <button type="submit" class="btn btn-success">Order Now</button>
                      </div>
                  </div>
              </form>';
    } else {
        echo "Layanan tidak ditemukan.";
    }
} else {
    echo "ID layanan tidak ditemukan.";
}
// Tutup koneksi
$conn->close();
?>
