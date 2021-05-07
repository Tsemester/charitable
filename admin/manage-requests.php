<?php  include('./partials/menu.php');   ?>


<div class="Main-content">

<h2>Submitted Requests</h2>


<table class = "tbl_full">
<tr>

<th>No</th>
<th>Date</th>
<th>Request Id</th>

<th>Organization </th>
<th>Contact</th>

<th>Type</th>
<th>Location</th>
<th>Donated</th>



<th>Status</th>
<th>Actions</th>


</tr>






<?php



  

            $sql = "SELECT * FROM request ORDER BY 'date' DESC "; // Query To Get All 

            $res = mysqli_query($conn, $sql); //Execute Query 

           

                $count = mysqli_num_rows($res); //Function to get all the rows in a databse
                $sn = 1;
                 if($count>0)

                 {
                    // We Have a database 

                    while ($row= mysqli_fetch_assoc($res)) {
                    
                     $id = $row['id'];
            $name=$row['name'];
              $number=$row['location'];
                 $date=$row['date'];
                   $status=$row['status'];
                   $type=$row['type'];
                          $location=$row['location'];
                             $assign=$row['assign'];
                   
                  
                     



                     ?> 






<tr>	
<td ><?php echo $sn++ ?></td>
<td ><?php echo $date ?></td>
<td ><?php echo $id ?></td>
<td ><?php echo $name ?></td>
<td ><?php echo $number ?></td>
<td ><?php echo $type ?></td>
<td ><?php echo $location ?></td>
<td ><?php echo $assign ?></td>
<td ><?php echo $status ?></td>

<td>


<a href="<?php echo SITEURL; ?>admin/update-request.php?id=<?php echo $id; ?>" class="btn-secondary">Update Request</a>
                    </td>
</td>

    
           
        <td > <a href="delete-request.php?req_del=<?php echo $row['id'];?>" onclick="return confirm('Are you sure you want to Delete The Request Donation?');" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i ></i>Delete Request</a> 
       
        </td>
   
</tr>
                     <?php

                    }

                }

                     else 

                     {

                        ?>
                   
                    <tr>
                  <td colspan="13"><div class="error">No Requests Submitted</div></td>
                 </tr>

<?php 
                     }

                     ?>




</table>








</div>
   


</body>
</html>

