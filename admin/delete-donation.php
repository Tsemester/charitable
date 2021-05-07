
<?php  include('./partials/menu.php');   
 //connection to db
error_reporting(0);
session_start();


// sending query
mysqli_query($conn,"DELETE FROM donate  WHERE id= '".$_GET['donor_del']."'  AND status='Rejected'"); // deleting records on the bases of ID
header("location: manage-donations.php");  //once deleted success redireted back to current page

?>