<link rel="stylesheet" href="css/login.css">

<?php

include('config.php');
if(isset($_SESSION['add'])) //  checking if the session is set or not 
{

echo$_SESSION['add'];  // Displaying Session Message
unset($_SESSION['add']); // Removing Session Message 

}
?>
<div class="wrapper fadeInDown">

    <div id="formContent">
        <!-- Tabs Titles -->
        <h2 class="active"> Register </h2>


        <!-- Icon -->
        <div class="fadeIn first">

        </div>

        <!-- Login Form -->
        <form method="POST">
            <label for="fullnames" style="text-align: left;">Full Names:</label>
            <input type="text" id="login" class="fadeIn second" name="name" placeholder="fullnames" required> 
            <label for="fullnames">Username:</label>
            <input type="text" id="login" class="fadeIn second" name="username" placeholder="username" pattern="/^[a-zA-Z]{3}[0-9]{5}*$/" title="3 letters followed by 3 digits 0nly" required>
            <label for="fullnames">Password:</label>
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
            <input type="submit" class="fadeIn fourth" value="Sign Up" name="submit">
        </form>


             <div id="formFooter">
            <a class="underlineHover" href="<?php echo SITEURL .'donor-login.php' ?>">Already have an account?</a>
        </div>


        

    </div>
</div>

<?php 
//Process Form And Save Into Database
    //check if the form is submitted 

    if(isset($_POST['submit']))
   {
//button  clicked 
$full_name=$username=$password="";
$full_nameErr=$usernameErr=$passwordErr="";

function test_input($data){
$data= trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}

//echo "Button Clicked ";

//Get Data From Form 
if(empty( $full_name)){
    $full_nameErr="full names required";
}else{
    $full_name = test_input($_POST['full_name']);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$full_name)) {
        $full_nameErr = "Only letters and white space allowed";
      }
}

if(empty( $username)){
    $usernameErr="username is required";
}else{
    $username =test_input($_POST['username']);
    if (!preg_match("/^[a-zA-Z]{3}[0-9]{5}*$/",$username)) {
        $usernameErr = "Only letters and white space allowed";
      }
}

if(empty( $password)){
    $passwordErr="password is required";
}else{
    $password=test_input( md5($_POST['password'])); // password ecryption with md5 
    if (!preg_match("(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}",$password)) {
        $passwordErr = "Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters";
      }
}
$full_name = test_input($_POST['full_name']);
$username =test_input($_POST['username']);
$password=test_input( md5($_POST['password'])); // password ecryption with md5 
// SQL QUERY TO SAVE 

$sql = "INSERT into donor_register 
SET
  name='$name' , 
  username='$username',
  password='$password'
    ";

    //Execute the query 

$res  = mysqli_query($conn , $sql ) ;


    //check whether the data is inseted or not 
   

   if($res==TRUE)
   {

    // echo "Inserted Succesfully ";
    // session starts 

  $_SESSION['add'] = "<div class='success'> Registered Successfully.</div> ";

  //Redirect page 
  header("location:".SITEURL.'donor-login.php');

   }

   else 
   {
   // echo "Failed ";

 
    $_SESSION['add'] = "<div class='error'> Failed To Register.</div> ";
   //Redirect page 
   header("location:".SITEURL.'donor-signup.php');

   }
   }
?> 