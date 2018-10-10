<?php
	$conn = mysqli_connect("localhost", "root", "", "placement");

	if($conn->connect_error) {
		die("connect_error".$conn->connect_error);
	}
?>