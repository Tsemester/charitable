<?php
include('./partials/menu.php');  
//connection to db
error_reporting(0);
session_start();


// sending query
mysqli_query($conn,"DELETE FROM request  WHERE id= '".$_GET['req_del']."'  AND status='Rejected'"); // deletig records on the bases of ID
header("location: manage-requests.php");  //once deleted success redireted back to current page

?>