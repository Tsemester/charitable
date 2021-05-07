<?php


session_start();
//define connection variables 
$servername = "localhost";
$username = "root";
$password = "";
$db_name= "315";


//Define the site url that will be used to redirect pages to the main page 
define ("SITEURL" , 'http://localhost/315/');
// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>

