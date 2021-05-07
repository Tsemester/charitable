<?php  include('./partials/menu.php');   ?>




<?php 
if(isset($_GET['id']))
{

 $id=$_GET['id'];

   
$sql2 = "SELECT * FROM request WHERE id=$id";

$res2 = mysqli_query($conn, $sql2);



    $row = mysqli_fetch_assoc($res2);


   $id = $row['id'];
            $name=$row['name'];
              $number=$row['location'];
                 $date=$row['date'];
                   $status=$row['status'];
                   $type=$row['type'];
                          $location=$row['location'];
                             $assign=$row['assign'];

}






else
{
header("location:" . SITEURL . 'admin/manage-requests.php');


}

?> 




<div class = "main-content ">

<div class = "wrapper"> 

<h1>Update Request</h1>

<br/> <br/>


<!---Add Category Form Starts --->
<form action="" method="POST" enctype="multipart/form-data">

<table class="tbladmin">

<tr>
    <td>Organization:</td>
    <td>
    <?php echo $name;  ?> 
    </td>
</tr>


<tr>

<td>Request Id :</td>

<td>
<?php  echo $id;?> 

</td>


</tr>


<tr>

<td>Type:</td>

<td>
<?php  echo $type;?> 

</td>


</tr>


<tr> 


<td>Date:</td>

<td>
<?php echo $date ?>


</td>


</tr>


<tr> 

<td>Donated:</td>
<td>

 <select type="text" name="assign" placeholder="" required>
              <option value="None">None</option>
                

                <?php

$sql2 = "SELECT * FROM request ";

$res2=mysqli_query($conn,$sql2);

$count=mysqli_num_rows($res2);


if($count>0)
{


    while($row=mysqli_fetch_assoc($res2)){

        $id=$row['id'];
        $type=$row['type'];
        ?>


           <option value="<?php echo $type; ?> "><?php echo $type; ?>  </option>
        <?php

    }

}


else{


    ?>
     <option value="0">No Donations Available</option>

    <?php
}
?>
                
                
 
                  
                
                
               
              </select>

</td>



</tr>


<tr>
<td>Status:</td>
<td>
<select name="status" >
<option <?php if ($status == "Requested")
{
    echo "selected";
} ?>value="Requested">Donated</option>
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
      
            <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="submit" name="submit" value="Update Request" class="btn-secondary">
    </td>
</tr>

</table>

</form>

<?php


if(isset($_POST['submit']))
{


              
                 




    $status=$_POST['status'];
    $assign=$_POST['assign'];
   


    
    $sql3= "UPDATE  request SET 
     
     status='$status',
     assign='$assign'
     
     
     WHERE id=$id

    
     ";
     $res3 = mysqli_query($conn, $sql3);

     if($res3==true)
     {
      
         $_SESSION['update'] = "<div class='success'> Request  Updated Succesfully.</div>";

  
    header("location:".SITEURL .'admin/manage-requests.php');

     }

      else{
        $_SESSION['update'] =  "<div class='error'> Failed To Update Request .</div>";

    //redirect to main page 
    header("location:" . SITEURL . 'admin/manage-requests.php');

      }

}


?>

</div>
</div>

