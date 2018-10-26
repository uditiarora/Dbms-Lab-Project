<?php
session_start();
$email_id = $_SESSION['passname'];
	if(isset($_POST['submit']))
	{
		$a=$_POST['Title'];
		$b=$_POST['Time_period'];
		$c=$_POST['Detail'];
		
		$db=mysqli_connect("localhost","root","","dbms1");
		$q1="insert into add_edu values('$email_id','$a','$b','$c')";
		mysqli_query($db,$q1);
		header("location:resume.php#resume");
	}
?>

<html>
<head>
	<title>Php</title>
</head>
<body>
<form action="Add_edu.php" method="post">
	<input type="text" name="Title" placeholder="Qualification"><br>
	<input type="text" name="Detail" placeholder="Detail"><br>
	<input type="text" name="Time_period" placeholder="Time"><br>
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>