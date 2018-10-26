<?php
session_start();
 $_SESSION['check']=0;  
 session_destroy();
 echo "You have been logged out";
?>