<link rel="stylesheet" href="../css/login.css">
<link rel="stylesheet" href="css/style.css">

<?php 

include('./config/constants.php'); 



 
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
       <strong><h1 class="active" style="color:  #ff5722; "> Admin Panel </h1></strong> 
        

        <!-- Icon -->
        <div class="fadeIn first">
            
        </div>

        <!-- Login Form -->
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
            <input type="text" id="login" class="fadeIn second" name="username" placeholder="username">
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
            <input type="submit" class="fadeIn fourth" value="Log In" name="submit">
        </form>

        

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
}   

if(empty($password)){
    $passwordErr="Password required";
}else{
    $password=test_input($_POST['password']);
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
   $password=test_input($_POST['password']);

   //SQL to check 
   $sql= "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'" ;

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
      header("location:" . SITEURL . 'admin/');
}
    
else{

      //user available and succes login 
       $_SESSION['login']="<div class ='error text-center'>Login Error<?div>";
      // redirect to homepage dashboard 
      header("location:" . SITEURL . 'admin/login.php');

    //user not available login failure 
}

}

?>






