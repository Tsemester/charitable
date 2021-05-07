

<link rel="stylesheet" href="css/login.css">
<?php 

include('logincheckorg.php');
if(isset($_SESSION['login']))
{

    echo $_SESSION['login'];
    unset($_SESSION['login']);
}

if(isset($_SESSION['add'])) //  checking if the session is set or not 
{

echo$_SESSION['add'];  // Displaying Session Message
unset($_SESSION['add']); // Removing Session Message 

}


?>



<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>



<!DOCTYPE html>

	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Donation Management</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">

	<link rel="stylesheet" href="css/style.css">
	


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>


	</head>
	<body  >

		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="<?php echo SITEURL .'charitable.php' ?>">Charity </a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							
		
							<li><a href=" <?php  echo SITEURL .'charitable.php' ?>">Home</a></li>
							<li><a href="<?php echo SITEURL .'request.php' ?>">Make Request</a></li>
							<li><a href="<?php echo SITEURL .'logoutrequest.php' ?>">Logout</a></li>
							
						</ul>
					</nav>
				</div>
			</div>
		</header>
<table class="table table-bordered m-table m-table--border-metal m-table--head-bg-primary">
    <!--begin::Thead-->
    <thead>
        <tr>
            <th scope="col">No</th>
           <th scope="col">Date</th>
            <th scope="col">Request Id</th>
            <th scope="col">Type</th>
            <th scope="col">Location </th>
            <th scope="col">Status</th>
            <th scope="col">Given</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>

    
<?php



  

            $sql = "SELECT * FROM request WHERE username='".$_SESSION['user']."' ORDER BY 'date' DESC "; // Query To Get All 

            $res = mysqli_query($conn, $sql); //Execute Query 

           

                $count = mysqli_num_rows($res); //Function to get all the rows in a databse
                $sn = 1;
                 if($count>0)

                 {
                    // We Have a database 

                    while ($row= mysqli_fetch_assoc($res)) {
                    
                     $id = $row['id'];
                     $date=$row['date'];
                       $location = $row['location'];
                         $type= $row['type'];
                 $assign= $row['assign'];
                   
                  $username = $row['username'];
              
                 $number=$row['number'];
                   $status=$row['status'];
                   
                 
                   
                    



                     ?> 

                    

    <!--end::Thead-->
    <!--begin::Tbody-->
    <tbody>
        <tr>
            <th><?php echo $sn++; ?></th>
            <td> <?php echo $date; ?></td>
            <td><?php echo $id; ?></td>
            <td><?php echo $type; ?></td>
            <td><?php echo $location; ?></td>
            <td><?php echo $status; ?></td>
             <td><?php echo $assign; ?></td>
         
         
             <td > <a href="delete-request.php?req_del=<?php echo $row['id'];?>" onclick="return confirm('Are you sure you want to delete the Request?');" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i class="fa fa-trash-o" style="font-size:16px"></i>Delete Donation</a> 
       
    
   
</tr>
                     <?php

                    }

                }

                     else 

                     {

                        ?>
                   
                    <tr>
                  <td colspan="13"><div class="error">No Requests Submitted Submitted</div></td>
                 </tr>

<?php 
                     }

                     ?>
           

        </tr>
       
    </tbody>
    <!--end::Tbody-->
</table>
<!--end::Table-->



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
