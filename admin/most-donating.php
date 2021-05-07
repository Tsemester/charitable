<?php  include('./partials/menu.php');   ?>



  <style>
  .tbl_full{
    width: 100%;

}

.tbladmin{

    width: 30%;

}
table tr th {
    border-bottom: 1px solid black;
    padding: 1%;
    text-align: left;
}
table tr td {
    padding: 1%;
}
  
  
  
  </style>
</head>



<h2>Submitted Donations</h2>


<table class = "tbl_full">
<tr>



<th>ID</th>
<th>Date</th>
<th>Donation Id</th>

<th>First Name</th>


<th>Last Name</th>
<th>Contact</th>

<th>Donation Type</th>
<th>Amount</th>
<th>Status</th>
<th>Actions</th>





</tr>






<?php



  

            $sql = "SELECT * FROM donation WHERE  lname='Tseme'  ORDER BY 'date' DESC  "; // Query To Get All 

            $res = mysqli_query($conn, $sql); //Execute Query 

           

                $count = mysqli_num_rows($res); //Function to get all the rows in a databse
                $sn = 1;
                 if($count>0)

                 {
                    // We Have a database 

                    while ($row= mysqli_fetch_assoc($res)) {
                    
                     $id = $row['id'];
                       $fname = $row['fname'];
                         $lname= $row['lname'];
                   
                      $contact = $row['contact'];
              
                 $date=$row['date'];
                   $donationType=$row['donationType'];
                     $amt=$row['amt'];
                   $n=0;
                    



                     ?> 






<tr>	
<td ><?php echo $sn++ ?></td>
<td ><?php echo $date ?></td>
<td ><?php echo $id ?></td>
<td > <?php echo $fname ?></td>
<td ><?php echo $lname ?></td>
<td ><?php echo $contact ?></td>
<td ><?php echo $donationType ?></td>
<td ><?php echo $amt?></td>

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
<!--footer containing social our social media platforms-->

</body>
</html>


