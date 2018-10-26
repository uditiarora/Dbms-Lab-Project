<?php
session_start();
$email_id = $_SESSION['passname'];
	if(isset($_POST['submit']))
	{
		$a=$_POST['Title'];
		$b=$_POST['Percentage'];

		$db=mysqli_connect("localhost","root","","dbms1");
		$q1="insert into add_pl values('$email_id', '$a','$b')";
		mysqli_query($db,$q1);
		header("location:resume.php#resume");
	}
?>

<html>
<head>
	<title>Php</title>
</head>
<body>
<form action="Add_pl.php" method="post">
	<input type="text" name="Title" placeholder="Language"><br>
	<input type="text" name="Percentage" placeholder="Percentage"><br>
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>