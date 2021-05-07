
<?php include('partials/menu.php'); ?>

<?php 
if(isset($_GET['id']))
{

 $id=$_GET['id'];

   
$sql2 = "SELECT * FROM donate  WHERE id=$id";

$res2 = mysqli_query($conn, $sql2);






    $row = mysqli_fetch_assoc($res2);

    $id = $row['id'];
                       $name = $row['name'];
                         $status = $row['status'];
                   
                      $number = $row['number'];
              
                 $date=$row['date'];
                   $type=$row['type'];
                     $donation=$row['donation'];
                      $specify=$row['specify'];
  

}






else
{
header("location:" . SITEURL . 'admin/manage-donations.php');


}

?> 




<div class = "main-content ">

<div class = "wrapper"> 

<h1>Update Donation</h1>

<br/> <br/>


<!---Add Category Form Starts --->
<form action="" method="POST" enctype="multipart/form-data">

<table class="tbladmin">


<tr>
    <td>Donation ID:</td>
    <td>
<?php echo $id;  ?> 
    </td>
</tr>
<tr>
    <td>Full Names:</td>
    <td>
    <?php echo $name;  ?> 
    </td>
</tr>
<tr>
    <td>Contact:</td>
    <td>
 <?php echo $number;  ?>
    </td>
</tr>

<tr>
    <td>Date:</td>
    <td>
<?php echo $date;  ?> 
    </td>
</tr>

<tr>
    <td>Username:</td>
    <td>
<?php echo $username;  ?> 
    </td>
</tr>

<tr>
    <td>Donation:</td>
    <td>
    <?php echo $type;  ?> 
    </td>
</tr>

<tr>
    <td>Recipient:</td>
    <td>
<?php echo $specify;  ?> 
    </td>
</tr>


<tr>
<td>Status:</td>
<td>
<select name="status" >
<option <?php if ($status == "Donated")
{
    echo "selected";
} ?>value="Donated">Donated</option>
<option <?php if ($status == "Approved")
{
    echo "selected";
} ?>value="Approved">Approved</option>
<option <?php if ($status == "Rejected")
{
    echo "selected";
} ?>value="Rejected">Rejected</option>

</select>


</td>

</tr>




<tr>
    <td >
           
             
        <input type="submit" name="submit" value="Update Donation" class="btn-secondary">
    </td>
</tr>

</table>

</form>

<?php


if(isset($_POST['submit']))
{

function test_input($data){
$data= trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}


 $status=test_input($_POST['status']);


    
    $sql3= "UPDATE donate  SET 
   
  status='$status'
     
     WHERE id=$id

    
     ";
     $res3 = mysqli_query($conn, $sql3);

     if($res3==true)
     {
      
         $_SESSION['update'] = "<div class='success'> Donation Updated Succesfully.</div>";

  
    header("location:".SITEURL .'admin/manage-donations.php');

     }

      else{
        $_SESSION['update'] =  "<div class='error'> Failed To Update Donation  .</div>";

    //redirect to main page 
    header("location:" . SITEURL . 'admin/manage-donations.php');

      }

}


?>

</div>
</div>
