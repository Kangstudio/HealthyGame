<?php

echo "OK-3";
$servername = getenv(strtoupper(getenv("DATABASE_SERVICE_NAME"))."_SERVICE_HOST");
$username = getenv("DATABASE_USER");
$password = getenv("DATABASE_PASSWORD");

$servername = getenv(strtoupper(getenv("mysql"))."172.30.113.88");
$username = getenv("kang");
$password = getenv("kangpedometer");

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    header("HTTP/1.1 503 Service Unavailable");
    die("Connection failed: " . $conn->connect_error);
}
echo "OK";
?>
