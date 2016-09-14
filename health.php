<?php

echo "OK-9";
$servername = getenv(strtoupper(getenv("DATABASE_SERVICE_NAME"))."_SERVICE_HOST");
$username = getenv("DATABASE_USER");
$password = getenv("DATABASE_PASSWORD");

$dbhost = getenv("172.30.113.88");
$dbport = getenv("3306");
$dbuser = getenv("kang");
$dbpwd = getenv("kangpedometer");
$dbname = getenv("pedometer");
$conn = mysqli($dbhost.":".$dbport, $dbuser, $dbpwd);

// Check connection
if ($conn->connect_error) {
    header("HTTP/1.1 503 Service Unavailable");
    die("Connection failed: " . $conn->connect_error);
}
echo "OK";
?>
