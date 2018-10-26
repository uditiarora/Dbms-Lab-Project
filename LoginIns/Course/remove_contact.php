<?php
session_start();
$email_id = $_SESSION['passname'];
	
		
		
		$db=mysqli_connect("localhost","root","","dbms1");
		$q1="delete from contact where email_id='".$email_id."' ";
		mysqli_query($db,$q1);
		header("location:resume.php");

?>

