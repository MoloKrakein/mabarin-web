<?php
require_once 'config.php';

function getServiceDetails($value)
{
    global $conn;
    $sql = "SELECT * FROM service_view WHERE service_type='$value'";
    $result = $conn->query($sql);
    $services = array();
    if ($result->num_rows > 0) {
        while ($service = $result->fetch_assoc()) {
            $services[] = processService($service);
        }
    }
    $conn->close();
    return $services;
}

function processService($service)
{
    $serviceImage = "../dashboard/uploads/" . basename($service['detail_image']);
    $serviceGame = $service['service_game'];
    $serviceName = $service['service_name'];
    $serviceType = ucfirst(strtolower($service['service_type']));
    $servicePrice = "Price: " . 'Rp ' . number_format($service['service_price'], 0, ',', '.');
    $serviceHours = "Hours: " . $service['service_start_hour'] . " - " . $service['service_end_hour'];
    $serviceId = $service['service_id'];
    return array($serviceImage, $serviceGame, $serviceName, $serviceType, $servicePrice, $serviceHours, $serviceId);
}
