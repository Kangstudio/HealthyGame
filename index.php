<?php
echo "tvt:".getenv('OPENSHIFT_MYSQL_DB_HOST');
/*$mysqli = mysqli_connect(
    getenv('OPENSHIFT_MYSQL_DB_HOST'), 
    getenv('OPENSHIFT_MYSQL_DB_USERNAME'), 
    getenv('OPENSHIFT_MYSQL_DB_HOST'), 
    getenv('OPENSHIFT_MYSQL_DB_PASSWORD'),
    getenv('OPENSHIFT_MYSQL_DB_PORT')
);*/
$servername = 'mysql-kang.0ec9.hackathon.openshiftapps.com';
$username = 'cakephp';
$password = 'q3xhacvM6G6qSrg3';
$database = 'default';

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    header("HTTP/1.1 503 Service Unavailable");
    die("Connection failed: " . $conn->connect_error);
}
echo "OK";
echo "tvt2";