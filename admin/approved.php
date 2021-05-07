<?php  include('./partials/menu.php');   ?>




<div class="Main-content">
<h2>Rejected Requests</h2>


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


</tr>






<?php



  

            $sql = "SELECT * FROM request WHERE status='Approved' ORDER BY 'date' DESC "; // Query To Get All 

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

                     <td ><?php echo $sn++ ?></td>
<td ><?php echo $date ?></td>
<td ><?php echo $id ?></td>
<td ><?php echo $name ?></td>
<td ><?php echo $number ?></td>
<td ><?php echo $type ?></td>
<td ><?php echo $location ?></td>
<td ><?php echo $assign ?></td>
<td ><?php echo $status ?></td>
          






                     <?php

                    }

                }

                     else 

                     {

                        ?>
                   
                    <tr>
                  <td colspan="13"><div class="error">No Requests Approved</div></td>
                 </tr>

<?php 
                     }

                     ?>




</table>









   
</div>

</body>
</html>

