<?php
echo "tvt-10";
/*$mysqli = mysqli_connect(
    getenv('OPENSHIFT_MYSQL_DB_HOST'), 
    getenv('OPENSHIFT_MYSQL_DB_USERNAME'), 
    getenv('OPENSHIFT_MYSQL_DB_HOST'), 
    getenv('OPENSHIFT_MYSQL_DB_PASSWORD'),
    getenv('OPENSHIFT_MYSQL_DB_PORT')
);*/
/*$servername = getenv('mysql-ka.0ec9.hackathon.openshiftapps.com');
$username = getenv('kang');
$password = getenv('kangpedometer');
$database = getenv('pedometer');

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    header("HTTP/1.1 503 Service Unavailable");
    die("Connection failed: " . $conn->connect_error);
}*/


$dbhost = getenv("172.30.113.88");
$dbport = getenv("3306");
$dbuser = getenv("kang");
$dbpwd = getenv("kangpedometer");
$dbname = getenv("pedometer");
$connection = new mysqli($dbhost.":".$dbport, $dbuser, $dbpwd, $dbname);
if (!$connection) {
  echo "Could not connect to database";
} else {
  echo "Connected to database.<br>";
}



echo "OK";
echo "tvt2";
?>