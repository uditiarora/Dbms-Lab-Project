<?php
session_start();
$email_id = $_SESSION['passname'];
	if(isset($_POST['submit']))
	{
		$a=$_POST['Title'];
		
		
		$db=mysqli_connect("localhost","root","","dbms1");
		$q1="insert into about values('$email_id','$a')";
		mysqli_query($db,$q1);
		header("location:resume.php#resume");
	}
?>

<html>
<head>
	<title>Php</title>
</head>
<body>
<form action="add_about.php" method="post">
	<input type="text" name="Title" placeholder="About Me"><br>
	
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>