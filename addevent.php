<?php
include 'connect.php';

  $cname = $_POST['name'];
  $date = $_POST['date'];
  $criteria = $_POST['criteria'];
  $package = $_POST['package'];
  $description = $_POST['description'];
  		
	
	$res = "INSERT INTO event (cname,date,criteria,package,description) VALUES ('$cname','$date','$criteria','$package','$description')";
  if ($conn->query($res) == true) 
  {
    echo "Inserted";
header("Location: notifications.php");
}
  $conn->close();


