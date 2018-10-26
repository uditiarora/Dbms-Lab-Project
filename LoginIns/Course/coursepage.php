<?php
session_start();
$email_id = $_SESSION['passname'];



	if(isset($_POST['submit']))
	{
		$a=$_POST['Title'];
		$b=$_POST['url'];
		
		
		$db=mysqli_connect("localhost","root","","dbms1");
		$q1="insert into videos values('$email_id','$a','$b')";
		mysqli_query($db,$q1);
		header("location:coursepage.php");
	}
?>

<html>
<head>
	<title>Php</title>
</head>
<body>
<form action="coursepage.php" method="post">
	<input type="text" name="Title" placeholder="Enter Course Name"><br>
	<input type="text" name="url" placeholder="Enter Video URL"><br>

	<input type="submit" name="submit" value="Add Video to Course">
</form>
</body>
</html>
