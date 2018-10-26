<?php 
 
session_start();
$email_id = $_SESSION['username'];
$_SESSION['passname'] = $email_id;
if($_SESSION['check'] == 0) { 
      header("Location: http://localhost:81/WebD/LoginIns/login.php"); 
 } 

$db=mysqli_connect("localhost","root","","dbms1");
$q1="select * from add_exp where email_id='".$email_id."'";
$q2="select * from add_edu where email_id='".$email_id."'";
$q3="select * from add_software where email_id='".$email_id."'";
$q4="select * from add_design where email_id='".$email_id."'";
$q5="select * from add_pl where email_id='".$email_id."'";
$q6 = "select * from user where email_id='".$email_id."'";
$q7 = "select * from user where email_id='".$email_id."'";
$q8 = "select * from about where email_id='".$email_id."'";
$q9 = "select * from contact where email_id='".$email_id."'";
$q10 = "select * from contact where email_id='".$email_id."'";
$q11 = "select * from contact where email_id='".$email_id."'";

$result1=mysqli_query($db,$q1);
$result2=mysqli_query($db,$q2);
$result3=mysqli_query($db,$q3);
$result4=mysqli_query($db,$q4);
$result5=mysqli_query($db,$q5);
$result6=mysqli_query($db,$q6);
$result7=mysqli_query($db,$q7);
$result8=mysqli_query($db,$q8);
$result9=mysqli_query($db,$q9);
$result10=mysqli_query($db,$q10);
$result11=mysqli_query($db,$q11);

$color=array('meter emerald','meter carrot','meter wisteria','meter sunflower','meter midnight','meter pomengrate','meter asbestos');
?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Courses</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">
  <link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-72x72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-114x114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-144x144-precomposed.png">
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

  <link rel="stylesheet" href="css/normalize.min.css">
  <link rel="stylesheet" href="css/main.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
  <script src="js/vendor/jquery.hashchange.min.js"></script>
  <script src="js/vendor/jquery.easytabs.min.js"></script>

  <script src="js/main.js"></script>
  <!--[if lt IE 9]>
      <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
      <![endif]-->
</head>
  <body class="bg-fixed bg-1">
<!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
   <div class="main-container">
    <div class="main wrapper clearfix">
      <!-- Header Start -->
        <header id="header">
            <div id="logo">
                <?php  while($a7=mysqli_fetch_array($result6))  {  ?>

                                    <h2>
                                        <?php echo " ".$a7[1]." ".$a7[2]." " ; ?>
                                    </h2>
                                   
                                    

                 <?php } ?>
               	                 
            </div>
        </header>
        <!-- Header End -->
        <!-- Main Tab Container -->
        <div id="tab-container" class="tab-container">
          <!-- Tab List -->
            <ul class='etabs'>
                <li class='tab' id="tab-about">
                  <a href="#about"><i class="icon-user"></i><span> About Me</span></a>
                </li>
                <li class='tab'>
                  <a href="#resume"><i class="icon-file-text"></i><span> Resume</span></a>
                </li>
                
                <li class='tab'>
                  <a href="#contact"><i class="icon-envelope"></i><span> Contact</span></a>
                </li>
            </ul>
          <!-- End Tab List -->
            <div id="tab-data-wrap">
              <!-- About Tab Data -->
                <div id="about">
                    <section class="clearfix">
                        <div class="g2">
                            
                            <div class="info">
                                 <?php  while($a6=mysqli_fetch_array($result7))  {  ?>

                                    <h2>
                                        <?php echo " ".$a6[1]." ".$a6[2]." " ; ?>
                                    </h2>
                                   
                                    

                                  <?php } ?>
                                  <?php  while($a8=mysqli_fetch_array($result8))  {  ?>

                                    <h5>
                                        <?php echo " ".$a8[1]."\n"; ?>
                                    </h5>
                                   
                                    

                <?php } ?>
    <br><br>
                                <h5>

    ADD ABOUT ME
      </h5>
      
    <br><br>
    <a href="add_about.php"><i class="fas fa-plus" style="color:lightblue;font-size:50px;margin-left:300px"></i>
    </a>
    
    <a href="http://localhost:81/WebD/Web/remove_about.php"><p>Remove About Me</p></a>

    			



                                
                            </div>
                        </div>
                        <div class="g1">
                            <div class="main-links sidebar">
                                <ul>
                                    <li>
                                        <a href="#resume">View My Resume</a>
                                    </li>
                                    
                                    <li>
                                        <a href="#contact">Hire me for your next project</a>
                                    </li>
                                    <li>
                                        <a href="#features">Features</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="break"></div>
                        
                    </section><!-- content -->
                </div>
              <!-- End About Tab Data -->
              <!-- Resume Tab Data -->
                <div id="resume">
                    <section class="clearfix">
                        <div class="g2">
                            <h3>
                                Work Experience
                            </h3>
                            <ul class="no-list work">
                                <li>
                                    <?php  while($a=mysqli_fetch_array($result1))  {  ?>

                                    <h5>
                                        <?php echo $a[1]; ?>
                                    </h5><span class="label label-info"><?php echo $a[1]; ?></span>
                                    <p>
                                        <?php echo $a[3]; ?>
                                    </p>



                                    

                                  <?php } ?>
    <h5>
    ADD ANY NEW EXPERIENCE
      </h5>
      
    <br><br>
    <a href="Add_exp.php"><i class="fas fa-plus" style="color:lightblue;font-size:50px;margin-left:300px"></i>
    </a>
    <br><br>
    <a href="http://localhost:81/WebD/Web/remove_exp.php"><p>Remove Experience</p></a>


                                </li>
                            </ul>



                            <h3>
                                Education
                            </h3>
                            <ul class="no-list work">
                                <li>
                                    <?php  while($a=mysqli_fetch_array($result2))  {  ?>

                                    <h5>
                                        <?php echo $a[1]; ?>
                                    </h5><span class="label label-info"><?php echo $a[1]; ?></span>
                                    <p>
                                        <?php echo $a[3]; ?>
                                    </p>

                                    <?php } ?>
                                    
                                    <h5>
                                      ADD ANY QUALIFICATION
                                    </h5>
                                    <br><br>
                                  <a href="Add_edu.php"><i class="fas fa-plus" style="color:lightblue;font-size:50px;margin-left:300px"></i>
                                  </a>


                                  <br><br>
    						<a href="http://localhost:81/WebD/Web/remove_edu.php"><p>Remove Qualification</p></a>
                                </li>
                            </ul>
                        </div>
                        <div class="g1">
                            <div class="sidebar">
                                <h3>
                                    Skills
                                </h3>
                                <h5>
                                    Software
                                </h5>

                                <?php while($a1=mysqli_fetch_array($result3)){  ?>

                                <div class="<?php echo $color[rand(0,6)]; ?>">
                                    <span style="width: <?php echo $a1[2]; ?>%"><span><?php echo $a1[1]; ?></span></span>
                                </div>
                                
                                <?php } ?>

                                <a href="Add_software.php"><i class="fas fa-plus" style="color:lightblue;font-size:25px;margin-left:130px"></i>
                                </a>
                                <br><br>
    						<a href="http://localhost:81/WebD/Web/remove_software.php"><p>Remove Software</p></a>
                                <div class="break"></div>
                                <h5>
                                    Design
                                </h5>
                                
                                <?php while($a1=mysqli_fetch_array($result4)){  ?>

                                <div class="<?php echo $color[rand(0,6)]; ?>">
                                    <span style="width: <?php echo $a1[2]; ?>%"><span><?php echo $a1[1]; ?></span></span>
                                </div>
                                
                                <?php } ?>

                                <a href="Add_design.php"><i class="fas fa-plus" style="color:lightblue;font-size:25px;margin-left:130px"></i>
                                </a>
                                <br><br>
    						<a href="http://localhost:81/WebD/Web/remove_design.php"><p>Remove Design</p></a>
                                <div class="break"></div>
                                <h5>
                                    Programming Language
                                </h5>
                                
                                <?php while($a1=mysqli_fetch_array($result5)){  ?>

                                <div class="<?php echo $color[rand(0,6)]; ?>">
                                    <span style="width: <?php echo $a1[2]; ?>%"><span><?php echo $a1[1]; ?></span></span>
                                </div>
                                
                                <?php } ?>

                                <a href="Add_pl.php"><i class="fas fa-plus" style="color:lightblue;font-size:25px;margin-left:130px"></i>
                                </a>
                                <br><br>
    						<a href="http://localhost:81/WebD/Web/remove_pl.php"><p>Remove Programming Language</p></a>
                            </div>
                        </div>
                    </section>
                </div>
              <!-- End Resume Tab Data -->
              <!-- Portfolio Tab Data -->
                
              <!-- End Portfolio Data -->
              <!-- Contact Tab Data -->
                <div id="contact">
                    <section class="clearfix">
                       <div class="g1">
                         <div class="sny-icon-box">
                           <div class="sny-icon">
                              <i class="icon-globe"></i>
                            </div>
                            <div class="sny-icon-content">
                              <h4>My Address</h4>
                              	<p><?php  while($a9=mysqli_fetch_array($result9))  {  ?>

                                    <h2>
                                        <?php echo " ".$a9[1]." " ; ?>
                                    </h2>
                                   
                                    

                                  <?php } ?>
                                 </p>
                            </div>
                         </div>
                       </div>
                       <div class="g1">
                         <div class="sny-icon-box">
                           <div class="sny-icon">
                              <i class="icon-phone"></i>
                            </div>
                            <div class="sny-icon-content">
                              <h4>Mobile Number</h4>
                              <p><?php  while($a10=mysqli_fetch_array($result10))  {  ?>

                                    <h2>
                                        <?php echo " ".$a10[2]." " ; ?>
                                    </h2>
                                   
                                    

                                  <?php } ?></p>
                            </div>
                         </div>
                       </div>
                       <div class="g1">
                         <div class="sny-icon-box">
                           <div class="sny-icon">
                              <i class="icon-user"></i>
                            </div>
                            <div class="sny-icon-content">
                              <h4>About Me</h4>
                              <p><?php  while($a11=mysqli_fetch_array($result11))  {  ?>

                                    <h2>
                                        <?php echo " ".$a11[3]." " ; ?>
                                    </h2>
                                   
                                    

                                  <?php } ?></p>
                            </div>
                         </div>
                       </div>
                       <div class="break"></div>
                       <h5> Add Information
     					 </h5>
     <a href="add_contact.php"><i class="fas fa-plus" style="color:lightblue;font-size:50px;margin-left:300px"></i>
    </a>
    						<a href="http://localhost:81/WebD/Web/remove_contact.php"><p>Remove Details</p></a>


                    </section>
                </div>
              <!-- End Contact Data -->
            </div>
        </div>
        <!-- End Tab Container -->
        
    </div><!-- #main -->
</div><!-- #main-container -->
<footer>
	<a href="http://localhost:81/WebD/Login/logout.php"><h2>Log Out</h2></a>
</footer>


</body>
</html>
