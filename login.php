<?php
session_start();
  
	include 'connect.php';

	$name= $_POST['name'];
    $password= $_POST['password'];

    $sql = "SELECT * FROM login WHERE name='$name' AND password='$password'";
    $result = $conn->query($sql);

    //if($result -> num_rows == 1){
    //	$message = "Login Succesful";
    	header("Location: sform.php");
    //	echo "<script type='text/javascript'>alert('$message');</script>";

    //} else {
    //	$message = "Login Unsuccesful";
      //  header("Location: slogin.html");
        //echo "<script type='text/javascript'>alert('$message');</script>";
    //}

  
?>
