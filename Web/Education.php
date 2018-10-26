<?php
	if(isset($_POST['submit']))
	{
		$a=$_POST['Institution Name'];
		$b=$_POST['Detail'];
		$c=$_POST['Time period'];

		$db=mysqli_connect("localhost","root","","database_name")
		$q1="INSERT INTO database_name VALUES($a,$b,$c)";
		mysqli_query($db,$q1);
	}
?>

<html>
<head>
	<title>Php</title>
</head>
<body>
<form action="Education.php" method="post">
	<input type="text" name="Institution Name" placeholder="Institution Name"><br>
	<input type="text" name="Detail" placeholder="Detail"><br>
	<input type="text" name="Time period" placeholder="Time"><br>
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>