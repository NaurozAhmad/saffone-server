<?php 
	header("Access-Control-Allow-Origin: *");
	require_once'connection.php';

	$name = $_REQUEST['name'];
	$phone = $_REQUEST['phone'];
	$loc = $_REQUEST['loc'];

	$toFunc = $_REQUEST['toFunc'];
	$firedBy = $_REQUEST['firedBy'];
	$firedNum = $_REQUEST['firedNum'];

	$query = "INSERT INTO functions VALUES('', '$name', '$phone', '$loc', '$toFunc', '$firedBy', '$firedNum')";

	if(mysqli_query($con, $query)) {
		echo "done";
	}
	else {
		echo "failed";
	}
?>