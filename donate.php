


<!DOCTYPE html>


<?php
include('logincheckdonor.php');

if(isset($_SESSION['add'])) //  checking if the session is set or not 
{

echo$_SESSION['add'];  // Displaying Session Message
unset($_SESSION['add']); // Removing Session Message 

}
?>




<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Donation Management </title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/donatestyle.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  

  <div class="container">
    
    <div class="title">Donation Form</div>
    <div class="content">

    



      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="name" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="username" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="number" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Donation Type</span>
            <input type="text" name="type" placeholder="Toiletry" required>
          </div>
          <div class="input-box">
            <span class="details">Date</span>
            <input type="date" name="date" value="DD-MM-YY" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).[0-9]{4}" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="donation" id="dot-1">
          <input type="radio" name="donation" id="dot-2">
          <span class="gender-title">Donation</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="donation">Open</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="donation">Direct</span>
          </label>
          <label for="dot-3">
            <span class="specify">Specify</span> 
            <div class="input-box">
              <select type="text" name="specify" placeholder="Red-Cross" required>
              <option value="None">None</option>
                

                <?php

$sql2 = "SELECT * FROM co_register ";

$res2=mysqli_query($conn,$sql2);

$count=mysqli_num_rows($res2);


if($count>0)
{


    while($row=mysqli_fetch_assoc($res2)){

        $id=$row['id'];
        $name=$row['name'];
        ?>


           <option value="<?php echo $name; ?> "><?php echo $name; ?>  </option>
        <?php

    }

}


else{


    ?>
     <option value="0">No Organization Found</option>

    <?php
}
?>
                
                
 
                  
                
                
               
              </select>
            </div>
          </label>           
          </div>
        </div>
        <div class="button">
          <input type="submit" name="submit" value="Donate">
        </div>
        <a href="<?php echo SITEURL.'donation.php'  ?>">Cancel</a>
      
          
      </form>



      <?php 
//Process Form And Save Into Database
    //check if the form is submitted 

    if(isset($_POST['submit']))
   {
//button  clicked 

function test_input($data){
$data= trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}

//echo "Button Clicked ";

//Get Data From Form 

 $name = test_input($_POST['name']);
 $username =test_input($_POST['username']);
 $number=test_input($_POST['number']); 
 $type = test_input($_POST['type']);
 $donation=test_input($_POST['donation']);
 $specify=test_input($_POST['specify']);// password ecryption with md5 
  $date=test_input($_POST['date']);

// SQL QUERY TO SAVE 

$sql = "INSERT into donate
SET
  name='$name' , 
  username='$username',
  number='$number',
  type='$type',
  donation='$donation',
  specify='$specify',
  date='$date',
  status='Donated'
    ";

    //Execute the query 

$res  = mysqli_query($conn , $sql ) ;


    //check whether the data is inseted or not 
   

   if($res==TRUE)
   {

    // echo "Inserted Succesfully ";
    // session starts 

  $_SESSION['add'] = "<div class='success'> Donated Successfully.</div> ";

  //Redirect page 
  header("location:".SITEURL.'donation.php');

   }

   else 
   {
   // echo "Failed ";

 
    $_SESSION['add'] = "<div class='error'> Failed To Donate.</div> ";
   //Redirect page 
   header("location:".SITEURL.'donate.php');

   }
   }
?> 
    



				
    </div>
  </div>

</body>
</html>
