
<?php
$errors = array();
$db = mysqli_connect("localhost","root","","dbms1");
if(isset($_POST['getstart']))
{
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$pass1 = $_POST['password'];
	$pass2= $_POST['passwordconfirm'];
	$password = md5($pass1);
	if($pass1!=$pass2)
	{
		
		header('Location:index.html');
		echo '<font color="#FF0000"><p align="center">Passwords not Match</p>';
	}
	else 
	{

		$temp ="INSERT INTO user(first_name,last_name,email_id,password) VALUES('$firstname','$lastname','$email','$password')";
		if(mysqli_query($db,$temp))
		{
			header('C:/xampp/htdocs/applications.html');
		}
		else
		{

			header('Location:index.html');

		}
	}
}
if(isset($_POST['getlogin']))
{
	ob_start();
	$email = $_POST['emaillogin'];
	$pass = $_POST['passwordlogin'];

	if(empty($email))
	{
		array_push($errors, "Username Required!");
	}
	if(empty($pass))
	{
		array_push($errors, "Password Required!");
	}
	if(count($errors)==0)
	{
		$password = md5($pass);
		$temp ="SELECT * FROM user WHERE email_id='$email' AND password='$password'";
		$result=mysqli_query($db,$temp);
		if(mysqli_num_rows($result)==1)
		{
			session_register($email);
			session_register($pass);
			$_SESSION['name']=$email;
			header('C:/xampp/htdocs/applications.html');
		}
		else
		{
			echo "Wrong Username or Password";
		}
		ob_end_flush();
	}
}

?>
