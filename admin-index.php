<?php
header("Access-Control-Allow-Origin: *");
include('config.php');
//
$admin = false;
if(isset($_GET['admin'])){$admin = $_GET['admin'];}

if($admin){
	$table = "users";
	$query = "SELECT * FROM ".$table." LIMIT 1";
	$result = $con->query($query);
	if($result){
	   echo $table." table already exists.";
	} else{
	   echo $table." table does not exist.";
	   $query = "CREATE TABLE ".$table." (
					uuid varchar(50) NOT NULL,
					name varchar(50) NOT NULL,
					coins varchar(50) NOT NULL,
					userData varchar(1000) NOT NULL,
					Date_Created TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
				  )";
		$result2 = $con->query($query);
		if($result2){
		   echo "</br>Successfully create table!";
		} else{
		   echo "</br>Create table fail!";
		}
	}
}
?>