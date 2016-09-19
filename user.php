<?php
header("Access-Control-Allow-Origin: *");
include('config.php');
//
$uuid = NULL;
$name = NULL;
$coins = NULL;
$getLeadeboard = false;
$test = false;
$table = "users";
if(isset($_GET['uuid'])){$uuid = $_GET['uuid'];}
if(isset($_GET['name'])){$name = $_GET['name'];}
if(isset($_GET['coins'])){$coins = $_GET['coins'];}
if(isset($_GET['ldb'])){$getLeadeboard = $_GET['ldb'];}
if(isset($_GET['test'])){$test = $_GET['test'];}
if(!$coins)$coins = 0;
//sync
if($uuid){
	$query = "SELECT * FROM ".$table." WHERE uuid LIKE '$uuid' LIMIT 1";
	$result = $con->query($query);
	if ($result->num_rows > 0){
		if($test)echo "User already exists.";
		$updateName = "";
		$updateCoins = "";
		while($row = mysqli_fetch_array($result))
		{
			if($name && $name != $row["name"])$updateName = "name = '$name'";
			$num_length = strlen((string)$coins);
			$num_length2 = substr("0000000000", $num_length);
			$coins = $num_length2.$coins;
			if($coins !== $row["coins"])$updateCoins = "coins = '$coins'";
			if($updateName && $updateCoins)$updateName = $updateName.", ";
			if($updateName || $updateCoins){
				if($test)if($updateName)echo "<br>updateName: ".$row["name"]." -> ".$name;
				if($test)if($updateCoins)echo "<br>updateCoins: ".$row["coins"]." -> ".$coins;
				$sql = "UPDATE ".$table." SET ".$updateName.$updateCoins." WHERE uuid = '$uuid' LIMIT 1";
				if(mysqli_query($con, $sql)) {
					if($test)echo "<br>Update successful.";
				} else {
					if($test)echo "<br>Update error.";
				}
			}
		}
	} else{
		if($test)echo "Not exist:".$uuid."-".$name."-".$coins;
		$num_length = strlen((string)$coins);
		$num_length2 = substr("0000000000", $num_length);
		$coins = $num_length2.$coins;
		$sql = "INSERT INTO ".$table." (uuid, name, coins) VALUES ('$uuid', '$name', '$coins')";
			if ($con->query($sql) === TRUE) {
				if($test)echo "<br>Registration successful.";
			}
	}
}

//getLeadeboard
if($getLeadeboard){
	if($getLeadeboard > 100)$getLeadeboard = 100;
	$leadeboardData = array();
	$inTop = false;
	if($test)echo "<br>Get Leadeboard:".$getLeadeboard;
	$query = "SELECT * FROM ".$table." ORDER BY coins DESC LIMIT ".$getLeadeboard;
	$result = $con->query($query);
	if ($result->num_rows > 0){
		while($row = mysqli_fetch_array($result))
		{
			if($test)echo "<br>".$row["coins"];
			if($uuid && $uuid == $row["uuid"]){
				$inTop = true;
				$data = array($row["name"], intval($row["coins"]), true);
			} else{
				$data = array($row["name"], intval($row["coins"]));
			}
			array_push($leadeboardData,$data);
		}
	}
	
	if(!$inTop){
		$query = "SELECT coins FROM ".$table." WHERE coins >= ".$coins." ORDER BY coins DESC";
		$result = $con->query($query);
		$num_rows = mysqli_num_rows($result);
		echo "window.pedometer.serverScript.yourRanking = ".$num_rows.";";
		//$data = array($name, $coins, true);
		//array_push($leadeboardData,$data);
	}
	$leadeboardData = json_encode($leadeboardData);
	echo "window.pedometer.serverScript.leadeboardData = ".$leadeboardData.";";
}
?>