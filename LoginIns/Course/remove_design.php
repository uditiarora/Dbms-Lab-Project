<?php
session_start();
$email_id = $_SESSION['passname'];
	if(isset($_POST['submit']))
	{
		$a=$_POST['Title'];

		$db=mysqli_connect("localhost","root","","dbms1");
		$q1="delete from add_design where email_id='".$email_id."' and quality='".$a."'";
		mysqli_query($db,$q1);
		header("location:resume.php#resume");
	}
?>

<html>
<head>
	<title>Php</title>
</head>
<body>
<form action="remove_design.php" method="post">
	<input type="text" name="Title" placeholder="Design"><br>
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>