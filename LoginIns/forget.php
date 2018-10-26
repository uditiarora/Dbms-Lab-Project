<?php 

require ('PHPMailer-master/PHPMailerAutoload.php');
require ('PHPMailer-master/class.smtp.php');


if(isset($_POST['submit'])){
                $email_id=$_POST['email_id'];
                $temp = md5($email_id);
        $mail = new PHPMailer;
        //$mail->SMTPDebug = 3;                               // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'akashbansal303@gmail.com';                 // SMTP username
        $mail->Password = 'Newpassword@2018';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 25;                                    // TCP port to connect to  ,'Visualmodel@Lnvotech.in','visualmodel','2016ucp1476@mnit.ac.in','narru' akashbansal303@gmail.com Newpassword@2018)
        $mail->SMTPDebug = 0;

        $mail->setFrom('akashbansal303@gmail.com', 'visualmodel');
        $mail->addAddress('apnabhai1990@gmail.com' ,'Akash Bansal');
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Email From CourseSpot';
        $mail->Body    = "Hello, Your code to reset password is:'".$temp."'\n You will be directed to the reset page where you have to enter this code.";

        $mail->AltBody = 'Password reset message from Course Spot';
        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
         /*   echo 'Thanks '.$mrtype.' '.$lastname.'!! <br> we have received your request for Quotation . we will back to you within 24 hours. <br>
            For any quieries, please contact visualmodel@lnvotech.in' ;*/
            header("location: http://localhost:81/WebD/LoginIns/reset.php");
        }
}
?>
<body>
    <form action="" method="post">
        <p> Enter email</p>
<p><input type="email" required autocomplete="off" placeholder="Email Address"  name="email_id">
<input name="action" type="hidden" value="submit" /></p>

<p><input  type='submit' class="button button-block" value='Submit' name='submit'></p>
    </form>

<p> Check your mail for the verification code and link to reset your password</p>

</body>
