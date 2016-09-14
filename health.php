<?php

echo "OK-1";
/*$servername = getenv(strtoupper(getenv("DATABASE_SERVICE_NAME"))."_SERVICE_HOST");
$username = getenv("DATABASE_USER");
$password = getenv("DATABASE_PASSWORD");

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    header("HTTP/1.1 503 Service Unavailable");
    die("Connection failed: " . $conn->connect_error);
}*/
$server = 'mysql-ka.0ec9.hackathon.openshiftapps.com'; // MySql server
$username = 'kang'; //waphay   root      // MySql Username
$password = 'kangpedometer';                   // MySql Password
$database = 'pedometer';    //gnsoftapps  // MySql Database

// The following should not be edited
$con = mysqli_connect("$server","$username","$password","$database");
mysqli_set_charset($con,'utf8'); 
if (mysqli_connect_errno())
{
	echo('var connect = "Could not connect: ' . mysqli_connect_error().'"');
}
echo "OK";
?>
