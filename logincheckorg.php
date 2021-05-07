<?php  


//authorization -access control

include('config.php');

// to check whether the user is logged in or not 
  if(!isset($_SESSION['user']))
  
  {
  //user is not logged in 


  //redirect to loign page 

  $_SESSION['no_login_message']= "<div class = 'error text-center'> Please Login To Your Organization </div> ";


    header("location:" . SITEURL . 'organization-login.php');
  
  }


?>