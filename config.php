<?php
$conn = new mysqli('172.30.113.88', 'kang', 'kangpedometer', 'pedometer');
// Check connection
if ($conn->connect_error) {
    header("HTTP/1.1 503 Service Unavailable");
    die("Connection failed: " . $conn->connect_error);
}
?>