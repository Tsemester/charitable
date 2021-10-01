<?php  


//authorization -access control

include('config.php');

// to check whether the user is logged in or not 
  if(!isset($_SESSION['user']))
  
  {
  //user is not logged in 


  //redirect to login page 

  $_SESSION['no_login_message']= "<div class = 'error text-center'> Please Login To Your Organization To Acess </div> ";


    header("location:" . SITEURL . 'organization-login.php');
  
  }


?>
