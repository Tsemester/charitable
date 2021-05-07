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

              

                
            $sql2= "SELECT * FROM co_register   WHERE name  LIKE '%$search%' OR number LIKE '%$search%'  ";

            $res2=mysqli_query($conn,  $sql2 );

            $count2=mysqli_num_rows($res2);

            if($count2>0 )
            {

              while($row=mysqli_fetch_assoc($res2))
              {

                   $id = $row['id'];
                       $number= $row['number'];
                         $name= $row['name'];
                   
                     



           
              ?>

                       
                    </div>
                   
                     
                      <td>
 <?php echo $id ?> 
                      </td>
<?php echo $name ?> 
                      <td>
 <?php echo $number; ?>
                      </td>
                      
                        
                        
                        
                    

                
                        <br>
                     
                    </div>
                    
                </div>


            


              <?php 

              }

            }

            else{
            

                  echo  "<div class='error'> No Records Of Such Names Exist .</div> ";

            }

                ?>
               
                <div class="clear-fix"></div>


               

              

              

          
            </div>

      </section>



   


</body>
</html>