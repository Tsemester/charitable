<link rel="stylesheet" href="css/login.css">

<?php 

include('config.php');
if(isset($_SESSION['add'])) //  checking if the session is set or not 
{

echo$_SESSION['add'];  // Displaying Session Message
unset($_SESSION['add']); // Removing Session Message 

}

 
if(isset($_SESSION['login']))
{

    echo $_SESSION['login'];
    unset($_SESSION['login']);
}


if(isset($_SESSION['no_login_message']))
{

    echo $_SESSION['no_login_message'];
    unset($_SESSION['no_login_message']);
}


 


?>




<div class="wrapper fadeInDown">

    <div id="formContent">
        <!-- Tabs Titles -->
       <strong><h2 class="active"> Sign In </h2></strong> 
        

        <!-- Icon -->
        <div class="fadeIn first">
            
        </div>

        <!-- Login Form -->
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
            <input type="text" id="login" class="fadeIn second" name="username" placeholder="username">
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
            <input type="submit" class="fadeIn fourth" value="Log In" name="submit">
        </form>

        <!-- Remind Passowrd -->
       <div id="formFooter">
            <a class="underlineHover" href="<?php echo SITEURL .'donor-signup.php' ?>">Dont have an account?</a>
        </div>

    </div>
</div>
<?php

$username= $password="";
$usernameErr= $passwordErr="";

if(isset($_POST['submit'])){

 if(empty($username)){
    $usernameErr="Username required";
}else{
    $username=test_input($_POST['username']);
    if (!preg_match("/^[a-zA-Z]{3}[0-9]{5}*$/",$username)) {
        $usernameErr = "Only letters and white space allowed";
      }
}   

if(empty($password)){
    $passwordErr="Password required";
}else{
    $password=test_input($_POST['password']);
    $password=test_input( md5($_POST['password'])); // password ecryption with md5 
    if (!preg_match("(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}",$password)) {
        $passwordErr = "Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters";
      }
}   





if(isset($_POST['submit']))
{


    function test_input($data){
$data= trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}

}

    ///process 
    //get data from form
   $username=test_input($_POST['username']);
   $password=test_input(md5($_POST['password']));

   //SQL to check 
   $sql= "SELECT * FROM donor_register WHERE username='$username' AND password='$password'" ;

   //Execute SQL

   $res=mysqli_query($conn,$sql);

   //count rows

   $count=mysqli_num_rows($res);

   if($count==1)
{
      
       //user available and succes login 
       $_SESSION['login']="<div class ='success'>Login Successful<?div>";
       


         $_SESSION['user']=$username; // to check whether the user is logged in or not 
      // redirect to homepage dashboard 
      header("location:" . SITEURL . 'donation.php');
}
    
else{

      //user available and succes login 
       $_SESSION['login']="<div class ='error text-center'>Login Error<?div>";
      // redirect to homepage dashboard 
      header("location:" . SITEURL . 'donor-login.php');

    //user not available login failure 
}

}

?>






