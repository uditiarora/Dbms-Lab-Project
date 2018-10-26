<?php include("connect.php");
$db = mysqli_connect("localhost","root","","dbms1");

if(isset($_POST['action']))
{          
    
    if($_POST['action']=="signup")
    {
        $first_name       = mysqli_real_escape_string($db,$_POST['first_name']);
        $last_name       = mysqli_real_escape_string($db,$_POST['last_name']);

        $email_id      = mysqli_real_escape_string($db,$_POST['email_id']);
        $password1   = mysqli_real_escape_string($db,$_POST['password1']);
        $password2   = mysqli_real_escape_string($db,$_POST['password2']);

        $query = "SELECT email_id FROM user where email_id='".$email_id."'";
        $result = mysqli_query($db,$query);
        $numResults = mysqli_num_rows($result);
        if (!filter_var($email_id, FILTER_VALIDATE_EMAIL)) // Validate email address
        {
            $message =  "Invalid email address please type a valid email!!";
        }
        elseif($numResults>=1)
        {
            $message = $email_id." Email already exist!!";
        }
        elseif(strcmp($password1,$password2)==0)
        {
$query2 = "insert into user(email_id,first_name,last_name,password) values('".$email_id."','".$first_name."','".$last_name."','".md5($password1)."')";
            $res = mysqli_query($db,$query2);
            $message = "Signup Sucessfull!!";

            echo "Success";
            header('Location:..\Home\demo.html');

        }
    }
}

?>

<!DOCTYPE signuphtml lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div id="particles-js"></div>

<div class="text">
	<div class="form">
      <div class="outer">
				<div class="inner" ><a href="http://localhost:81/WebD/Login/signup.php"><Button  class="button button-block">&nbsp;&nbsp;Sign Up&nbsp;&nbsp;</Button></a></div>
				<div class="inner"><a href ="http://localhost:81/WebD/Login/login.php"><Button  class="button button-block">&nbsp;&nbsp;Log In&nbsp;&nbsp;&nbsp;</Button></a></div>
			</div>
      
		
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="#" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              
              <input type="text" required autocomplete="off" placeholder = "First Name" name="first_name"/>
            </div>
        
            <div class="field-wrap">
              
              <input type="text"required autocomplete="off" placeholder="Last Name" name = "last_name"/>
            </div>
          </div>

          <div class="field-wrap">
            
            <input type="email"required autocomplete="off" placeholder="Email Address" name = "email_id"/>
          </div>
          
          <div class="field-wrap">
            
            <input type="password"required autocomplete="off" placeholder="Set A Password" name = "password1"/>
          </div>
          <div class="field-wrap">
           
            <input type="password"required autocomplete="off" placeholder="Confirm Password" name="password2" />
            <input name="action" type="hidden" value="signup" />
          </div>
          <button type="submit" class="button button-block"/>Get Started</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="/" method="post">
          
            <div class="field-wrap">
            
            <input type="email"required autocomplete="off" placeholder="Email Address" />
          </div>
          
          <div class="field-wrap">
           
            <input type="password"required autocomplete="off" placeholder="Password" />
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block" id="button1"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
</div>
  <script src='https://cldup.com/S6Ptkwu_qA.js'></script>

  

    <script  src="js/index.js"></script>

<script type="text/javascript">
  function loginpage()
  {
    var x = document.getElementById('signup');
    var y = document.getElementById('login');
    x.style.display = 'none';
    y.style.display = 'block';
  }
  function signpage()
  {
    var x = document.getElementById('signup');
    var y = document.getElementById('login');
    x.style.display = 'block';
    y.style.display = 'none';
  }
</script>


</body>

</html>
  <script src='https://cldup.com/S6Ptkwu_qA.js'></script>

  

    <script  src="js/index.js"></script>


</body>

</html>
