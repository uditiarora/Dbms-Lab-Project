<?php include("connect.php");
$db = mysqli_connect("localhost","root","","dbms1");

if(isset($_POST['action']))
{          
    
    if($_POST['action']=="login")
    {
       
        $email_id   = mysqli_real_escape_string($db,$_POST['email_id']);
        $password   = mysqli_real_escape_string($db,$_POST['password']);
        session_start();
        $_SESSION['username'] = $email_id;
        $_SESSION['check'] = 1;
        $strSQL = mysqli_query($db,"select first_name from ins where email_id='".$email_id."' and password='".md5($password)."'");
        $Results = mysqli_fetch_array($strSQL);
        if(mysqli_num_rows($strSQL) && count($Results)>=1)
        {
            header('Location:http://localhost:81/WebD/LoginIns/Course/resume.php');
        }
        else
        {
            $message = "Invalid email or password!!";
        }   
    }
    
}

?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Log In</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div id="particles-js"></div>

<div class="text">
  <div class="form">
      <div class="outer">
        <div class="inner" ><a href="http://localhost:81/WebD/LoginIns/signup.php"><Button  class="button button-block">&nbsp;&nbsp;Sign Up&nbsp;&nbsp;</Button></a></div>
        <div class="inner"><a href ="http://localhost:81/WebD/LoginIns/login.php"><Button  class="button button-block">&nbsp;&nbsp;Log In&nbsp;&nbsp;&nbsp;</Button></a></div>
      </div>
      
    
      
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="#" method="post">
          
            <div class="field-wrap">
            
            <input type="email"required autocomplete="off" placeholder="Email Address"  name="email_id">
          </div>
          
          <div class="field-wrap">
           
            <input type="password"required autocomplete="off" placeholder="Password" name="password">
            <input name="action" type="hidden" value="login" />
          </div>
          
          <p class="forgot"><a href="http://localhost:81/WebD/LoginIns/forget.php">Forgot Password?</a></p>
          
          <input  type='submit' class="button button-block" value='LOGIN' name='Login'>
          
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
