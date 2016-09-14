<?php
echo "tvt-12";
/*$mysqli = mysqli_connect(
    getenv('OPENSHIFT_MYSQL_DB_HOST'), 
    getenv('OPENSHIFT_MYSQL_DB_USERNAME'), 
    getenv('OPENSHIFT_MYSQL_DB_HOST'), 
    getenv('OPENSHIFT_MYSQL_DB_PASSWORD'),
    getenv('OPENSHIFT_MYSQL_DB_PORT')
);*/
$servername = getenv('mysql-ka.0ec9.hackathon.openshiftapps.com');
$username = getenv('kang');
$password = getenv('kangpedometer');
$database = getenv('pedometer');

// Create connection
//$conn = new mysqli($servername, $username, $password, $database);
$conn = new mysqli('172.30.113.88', 'kang', 'kangpedometer', 'pedometer');

// Check connection
if ($conn->connect_error) {
    header("HTTP/1.1 503 Service Unavailable");
    die("Connection failed: " . $conn->connect_error);
}


echo "OK";
echo "tvt2";
?>