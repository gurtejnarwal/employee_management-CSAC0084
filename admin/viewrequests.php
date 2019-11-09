<?php include"top.php";


if ($_SESSION['USEREMAIL']=="") {

echo "<script type='text/javascript'>alert('You are not Login!! Please Log in'); window.location.href ='../index.php'</script>";

echo "you are not login";
}





else{


$i=1;


      
      $sql = "SELECT * FROM `request_access` WHERE `access_type`='User'";
     
   //  echo $sql;

  $result = mysqli_query($conn,$sql);// or die(mysql_error());
 
      

      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
       //  $active = $row['active'];

		if ($result=mysqli_query($conn,$sql))
  		
  			{
  // Fetch one and one row
  			?>	
  			<div class="container-fluid text-center col-lg-12 padding">
  			<h1>All Requests</h1>
  			<div class="container-fluid" style="padding-bottom: 300px;">
			
				<form method="POST">
	
			<div class="padding">
				<table class="table table-dark" >
  
					  <thead>
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">Firstname</th>
					      <th scope="col">Lastname</th>
					      <th scope="col">Department</th>
					      <th scope="col">Access Type</th>
					      <th scope="col">Request Status</th>
					      <th scope="col">Action</th>

					    </tr>
					  </thead>
					  <tbody>


  	<?php
	  			while ($row=mysqli_fetch_row($result))
	
	    		{   

		
						?>


						    <tr>
						      <th scope="row"><?php echo $i++; ?></th>
						      <td><?php echo $row[4];  ?></td>
						      <td><?php echo $row[5];  ?></td>
						      <td><?php echo $row[6];  ?></td>
						      <td><?php echo $row[2];  ?></td>
						      <td>		
						      			<?php if($row[3]=='1')
						      			{
						      				echo "Accepted";
						      			}
						      			else if ($row[3]=='2') {
						      				echo "Pending";
						      				# code...
						      			}

						      			else{
						      				echo "Declined";

						      			}  ?>


						      				

						      </td>
						      <td>
						      	<?php 

						      	if($row[3]=='1')
						      			{
						      				echo "Request Accepted";
						      			}
						      	else if ($row[3]=='2') {

						      		?>
						      				<a href="request.php?id=<?php echo $row[1]; ?>&result=Accept" class="btn btn-warning">Accept</a> || <a href="request.php?id=<?php echo $row[1]; ?>&result=Decline" class="btn btn-danger">Decline</a></td>
					<?php		# code...
						      			}

						      	else{
					?>
						      				<a href="request.php?id=<?php echo $row[1]; ?>&result=Delete" class="btn btn-danger">Delete Request From List</a>
						      		<?php
						      	}?>

						      	
						    </tr>
						   
	    			<?php
				}






						      			
						      			}


				
      
      else{  echo "something went wrong";
        	    	}

        	    

?>



  </tbody>
</table>
	</div>
	
</div>
</div>
</form>
<?php
}
 include"bottom.php"; ?>