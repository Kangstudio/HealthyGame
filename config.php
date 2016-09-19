<?php
$con = new mysqli('172.30.113.88', 'kang', 'kangpedometer', 'pedometer');
// Check connection
if ($con->connect_error) {
    header("HTTP/1.1 503 Service Unavailable");
    die("Connection failed: " . $con->connect_error);
}
?>