<?php
session_start();
$email_id = $_SESSION['passname'];
	if(isset($_POST['submit']))
	{
		$a=$_POST['Title'];
		$b=$_POST['Time_period'];
		
		$db=mysqli_connect("localhost","root","","dbms1");
		$q1="delete from add_edu where email_id='".$email_id."' and institute='".$a."' and duration='".$b."'";
		mysqli_query($db,$q1);
		header("location:resume.php#resume");
	}
?>

<html>
<head>
	<title>Php</title>
</head>
<body>
<form action="remove_edu.php" method="post">
	<input type="text" name="Title" placeholder="Quality"><br>
	<input type="text" name="Time_period" placeholder="Time"><br>
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>