<?php
include 'connect.php';

  $name = $_POST['name'];
  $email = $_POST['email'];
  $dob = $_POST['dob'];
  $usn = $_POST['usn'];
  $gender = $_POST['gender'];
  $dept = $_POST['dept'];
  $year = $_POST['year'];
  $sslc = $_POST['sslc'];
  $puc = $_POST['puc'];
  $mca = $_POST['mca'];
  $mobile = $_POST['mobile'];
  $nationality = $_POST['nationality'];
  $photo = $_POST['photo'];
  $resume = $_POST['resume'];

		
	
	$res = "INSERT INTO student (name,email,dob,usn,gender,dept,year,sslc,puc,mca,mobile,nationality,photo,resume) VALUES ('$name','$email','$dob','$usn','$gender','$dept','$year','$sslc','$puc','$mca','$mobile','$nationality','$photo','$resume')";
  if ($conn->query($res) == true) 
  {
    echo "Inserted";
header("Location: index.html");
}
  $conn->close();


