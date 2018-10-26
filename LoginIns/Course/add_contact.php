<?php
session_start();
$email_id = $_SESSION['passname'];
	if(isset($_POST['submit']))
	{
			$a=$_POST['address'];
		$b=$_POST['mobile'];

		$c=$_POST['Title'];
		
		
		$db=mysqli_connect("localhost","root","","dbms1");
		$q1="insert into contact values('$email_id','$a','$b','$c')";
		mysqli_query($db,$q1);
		header("location:resume.php#resume");
	}
?>

<html>
<head>
	<title>Php</title>
</head>
<body>
<form action="add_contact.php" method="post">
	<input type="text" name="address" placeholder="Address"><br>
	<input type="text" name="mobile" placeholder="Mobile Number"><br>

	<input type="text" name="Title" placeholder="About Me"><br>
	
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>