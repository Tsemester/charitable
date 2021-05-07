<link rel="stylesheet" href="./css/style.css">

<?php  include('./partials/menu.php');   ?>
<?php




 
if(isset($_SESSION['login']))
{

    echo $_SESSION['login'];
    unset($_SESSION['login']);
}



?>




<div class="container">

<h1>Admin DashBoard</h1>

  <section class="res-search text_center">
        <div class="container ">
            <form action="<?php echo SITEURL;?>admin/search.php" method="POST">

                <input type="search" name="search" placeholder="Search for Organizations  ">
                <input type="submit" name="submit" value="Search" class="btn">
            </form>
           
        
        </div>
    </section>


    

    <div>


<br> <br>
  
<div class ="col-4 text-center">
<h1>Donations</h1>

<?php 


    $sql5 = "SELECT * FROM donate  " ;

    $res5 = mysqli_query($conn, $sql5);

    $count5 = mysqli_num_rows($res5);


?>
    <h1><?php echo $count5 ?></h1>
    <br/>
    Total Donation


<br/>
</div>

<div class ="col-4 text-center">
<h1>Organization</h1>

<?php 


    $sql= "SELECT * FROM co_register " ;

    $res = mysqli_query($conn, $sql);

    $count1= mysqli_num_rows($res);


?>
    <h1><?php echo $count1 ?></h1>
    <br/>
    Total Organizations


<br/>
</div>




<div class ="col-4 text-center">
<h1>Requests</h1>

<?php 


    $sql2= "SELECT * FROM request " ;

    $res2 = mysqli_query($conn, $sql2);

    $count2= mysqli_num_rows($res2);


?>
    <h1><?php echo $count2 ?></h1>
    <br/>
    Total Requests


<br/>
</div>




<div class ="col-4 text-center">
<h1>Donors</h1>

<?php 


    $sql0= "SELECT * FROM donor_register " ;

    $res0 = mysqli_query($conn, $sql0);

    $count0= mysqli_num_rows($res0);


?>
    <h1><?php echo $count0 ?></h1>
    <br/>
    Total Donors


<br/>
</div>








</div>