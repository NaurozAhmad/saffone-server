<?php 
	header("Access-Control-Allow-Origin: *");
	require_once'connection.php';

	$firedNum = $_REQUEST['btnNum'];

	$query = "SELECT * FROM functions WHERE firedNum='$firedNum' AND firedBy='poi'; ";
	$result = mysqli_query($con, $query);
	$rows = mysqli_fetch_assoc($result);
	if(mysqli_num_rows($result) > 0 ) {
		echo $rows['poi'];
	}
	else {
		echo "nope";
	}

?>