
<?php 
include('./config/constants.php'); 
include('login-check.php'); 


?> 



<html>
<head>

<title>Donation Management Home</title>

<link rel = "stylesheet"  href="css/style.css" > 

 </head>
<body>
    

<!--- Menu Section Starts -->
<div class ="Menu"> 
    <h1 style="float: left;">Admin Panel</h1><br><br>
    

<div class  = "wrapper">
<ul>
<li><a href="index.php">Home</a></li>

  <li>  <a href="manage-donations.php">Manage Donations</a></li>
   <li> <a href="manage-requests.php">Manage Requests</a></li>
   <li> <a href="rejected.php">Rejected Requets </a></li>
   <li> <a href="approved.php">Approved </a></li>
   <li> <a href="open.php">Open</a></li>
  
   <li> <a href="logout.php">Logout</a></li>
   


</ul>
</div>




</div>
</body>
<!--- Menu Section Ends  -->