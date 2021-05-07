  <?php  include('./partials/menu.php');   ?>

      <section class="res-search text_center">
        <div class="container">
        <?php

          $search=$_POST['search'];

        ?>
            
            <h2>Your Search Result "<?php echo "are"; ?></h2>

        </div>
    </section>

  

  
    

    </section>

      <section class="container">
            <div class="container ">
               
                <?php 

              

                
            $sql2= "SELECT * FROM tbl_request  WHERE organization  LIKE '%$search%' OR request_type LIKE '%$search%'  ";

            $res2=mysqli_query($conn,  $sql2 );

            $count2=mysqli_num_rows($res2);

            if($count2>0 )
            {

              while($row=mysqli_fetch_assoc($res2))
              {

                   


                           $id = $row['id'];
            $request_id=$row['request_id'];
              $donated=$row['donated'];
                 $date=$row['date'];
                   $request_type=$row['request_type'];
                     $amount=$row['amount'];
                     $organization=$row['organization'];

                     
           
              ?>

                       
                    </div>
                    <div class="tbl_full">
                        <?php echo $organization?> 
                         <?php echo $request_id; ?>
                        <?php  echo $request_type?>
                        <?php  echo $amount?>
                        <?php  echo $date?>
                       
                        <?php  echo $donated?>
                        
                        
                    

                
                        <br>
                     
                    </div>
                    
                </div>


            


              <?php 

              }

            }

            else{
            

                  echo  "<div class='error'> Not Available .</div> ";

            }

                ?>
               
                <div class="clear-fix"></div>


               

              

              

          
            </div>

      </section>



   


</body>
</html>