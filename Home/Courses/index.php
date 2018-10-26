<?php 
 
session_start();
$db = mysqli_connect("localhost","root","","dbms1");

if($_SESSION['check'] == 0) { 
      header("Location: http://localhost:81/WebD/Login/login.php"); 
 } 
$q1="select * from ins";
$result1=mysqli_query($db,$q1);

?>


<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title>Courses | CourseSpot
      </title>
      <meta name="description" content="Read Education Related BLogs for free"/>
      <meta name="keywords" content="free, responsive, blog, education, web site"/>
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/responsee.css">
      <!-- CUSTOM STYLE -->       
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="css/template-style.css">
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
      <script type="text/javascript" src="js/modernizr.js"></script>
      <script type="text/javascript" src="js/responsee.js"></script>          
      <!--[if lt IE 9]> 
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
      <![endif]-->     
   </head>
   <body class="size-1140">
      <!-- TOP NAV WITH LOGO -->          
      <header class="margin-bottom">
         <div class="line">
            <nav>
               <div class="top-nav">
                  <p class="nav-text"></p>
                  <a class="logo" href="index.html">            
                  CourseSpot<span>Courses</span>
                  </a>            
                  
               </div>
            </nav>
         </div>
      </header>
      <!-- MAIN SECTION -->                  
      <section id="home-section" class="line">
         <div >
            <!-- ARTICLES -->             
            <div class="s-12 l-9">
            
               <!-- ARTICLE 1 -->               
               <article class="post-1 line">
                  <!-- image -->                 
                                  
                  <div class="s-12 l-5 post-text">
                      <?php  while($a1=mysqli_fetch_array($result1))  {  ?>

                                    <h2>
                                       <a href="courseList.php?data=<?php echo $a1[0] ; ?>" ><?php echo " ".$a1[1]." ".$a1[2]." " ; ?></a>
                                    </h2>
                                   
                                    

                 <?php } ?>
                  </div>
                  <!-- date -->                 
                  
               </article>
               
             
            </div>
            <!-- SIDEBAR -->             
            <!-- SIDEBAR -->             
                             <!-- AD REGION --> 
                 
                  <!-- LATEST POSTS -->
             
             
            </div>
         </div>
      </section>
      <!-- FOOTER -->       
      <div class="line">
         <footer>
            <div class="s-12 l-8">
               <p>
                  Copyright 2015,<br>
               
               </p>
            </div>
            <div class="s-12 l-4">                                 
               <a class="right" href="#" title="Responsive framework">Design and coding<br>
               by CourseSpot
               </a>                       
            </div>
         </footer>
      </div>
   </body>
</html>