<?php

include 'db.php';
session_start();

$device_id = $_SESSION['deviceid'] ?? null;

if (!$device_id) {
    echo json_encode(["error" => "No device ID"]);
    exit;
}

$stmt = $traccar_conn->prepare("
    SELECT latitude, longitude
    FROM tc_positions
    WHERE deviceid = ?
    ORDER BY servertime DESC
    LIMIT 1
");

$stmt->bind_param("s", $device_id);
$stmt->execute();

$result = $stmt->get_result();
$data = $result->fetch_assoc();

echo json_encode($data);
?>