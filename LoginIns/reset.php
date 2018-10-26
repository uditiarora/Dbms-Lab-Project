<?php include("connect.php");
$db = mysqli_connect("localhost","root","","dbms1");
          //  echo "Code ".md5("a@a.c")." copy";

if(isset($_POST['action']))
{          
    if($_POST['action']=="reset")
    {
       
        $email_id   = mysqli_real_escape_string($db,$_POST['email_id']);
        $code   = mysqli_real_escape_string($db,$_POST['code']);              
        $password1   = mysqli_real_escape_string($db,$_POST['password1']);
        $password2   = mysqli_real_escape_string($db,$_POST['password2']);
        $code_temp = md5($email_id);
        $strSQL = mysqli_query($db,"select first_name from ins where email_id='".$email_id."'");
        $Results = mysqli_fetch_array($strSQL);

        if(mysqli_num_rows($strSQL)>0 && count($Results)>=1)
        {
            if(strcmp($password1,$password2)==0){
                if(strcmp($code_temp,$code)==0){
                    $q = "update ins set password='".md5($password1)."' where email_id='".$email_id."'";
                    mysqli_query($db,$q);
                    echo "password reset successful!";
                    
                }
                else{
                    echo "Wrong code";
                }
            }
            else{
                echo "Passwords don't match";
            }
        }
        else{
            echo "invalid email-id";
        }
        




    }
    
}

?>

<body>
    <form action="" method="post">
    <p><input id="email_id" name="email_id" type="email" placeholder="Email Addresss"></p>
    <p><input id="code" name="code" type="text" placeholder="Verification Code"></p>
    <p><input id="password1" name="password1" type="password" placeholder="Password"></p>
    <p><input id="password2" name="password2" type="password" placeholder="Confirm Password"></p>
    <input name="action" type="hidden" value="reset" /></p>
    <p><input type="submit" value="Reset" /></p>


</body>
