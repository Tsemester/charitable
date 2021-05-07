<?php  include('./partials/menu.php');   ?>



 <div class="Main-content">
  
  
  </style>
</head>




<h2>Submitted Donations</h2>


<table class = "tbl_full">
<tr>



<th>ID</th>
<th>Date</th>
<th>Donation Id</th>

<th>Full Names </th>
<th>Contact</th>

<th>Type</th>
<th>Donation</th>
<th>Recepient</th>
<th>Status</th>
<th>Actions</th>





</tr>






<?php



  

            $sql = "SELECT * FROM donate ORDER BY 'date' DESC "; // Query To Get All 

            $res = mysqli_query($conn, $sql); //Execute Query 

           

                $count = mysqli_num_rows($res); //Function to get all the rows in a databse
                $sn = 1;
                 if($count>0)

                 {


     
                    // We Have a database 

                    while ($row= mysqli_fetch_assoc($res)) {
                    
                     $id = $row['id'];
                       $name = $row['name'];
                         $status = $row['status'];
                   
                      $number = $row['number'];
              
                 $date=$row['date'];
                   $type=$row['type'];
                     $donation=$row['donation'];
                      $specify=$row['specify'];
                   $n=0;
                    



                     ?> 






<tr>	
<td ><?php echo $sn++ ?></td>
<td ><?php echo $date ?></td>
<td ><?php echo $id ?></td>
<td > <?php echo $name ?></td>

<td ><?php echo $number?></td>
<td ><?php echo $type ?></td>
<td ><?php echo $donation?></td>
<td ><?php echo $specify?></td>
<td ><?php echo $status?></td>





<td>

 <a href="<?php echo SITEURL; ?>admin/update-donation.php?id=<?php echo $id; ?>" class="btn-secondary">Update Donation</a>
                    </td> 
       
                    <td>

 <a href="delete-donation.php?donor_del=<?php echo $row['id'];?>" onclick="return confirm('Are you sure you want to delete the donation?');" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i class="fa fa-trash-o" style="font-size:16px"></i>Delete Donation</a> 
                    </td> 
    
   
</tr>
                     <?php

                    }

                }

                     else 

                     {

                        ?>
                   
                    <tr>
                  <td colspan="13"><div class="error">No Donations Submitted</div></td>
                 </tr>

<?php 
                     }

                     ?>




</table>









   


</body>
</html>






<br><br>

</div>
<!--footer containing social our social media platforms-->

</body>
</html>


