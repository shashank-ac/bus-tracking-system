<?php
$conn = new mysqli("localhost", "root", "", "bus_db");
$traccar_conn =new mysqli("localhost", "root", "", "traccar");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($traccar_conn->connect_error) {
    die("Connection failed: " . $traccar_conn->connect_error);
}
?>
