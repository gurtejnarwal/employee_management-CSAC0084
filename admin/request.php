<?php 




include"top.php"; 

if ($_SESSION['USEREMAIL']=="") {

echo "<script type='text/javascript'>alert('You are not Login!! Please Log in'); window.location.href ='../index.php'</script>";

echo "you are not login";
}





else{

  $userinfo=$_GET['id'];
  $result=$_GET['result'];


if ($result=="Accept") {
			$sql="UPDATE `request_access` SET `access_type`='Elevated User',`result`='1' where `uid`='$userinfo'";

			    				echo $sql;

			    				if (mysqli_query($conn, $sql)) 
			    				    {


														$sql="UPDATE `users` SET `access_type`='Elevated User' where `uid`='$userinfo'";

									    				echo $sql;
									    				if (mysqli_query($conn, $sql)) 
									    				    {

									    				    	echo"  upadetted";
									    				    	header('Location:viewrequests.php');


								           					 } 
								    				
								    				        else {
								               						echo "Error: " . $sql . "" . mysqli_error($conn);
								            					}


								            					//upadte user table ends
		              					 //echo "New record created successfully";
		              					// header('Location:viewrequests.php');
		           					 } 
		    				
		    				        else {
		               						echo "Error: " . $sql . "" . mysqli_error($conn);
		            					}

}

elseif ($result=="Decline") {
			$sql="UPDATE `request_access` SET `result`='0' where `uid`='$userinfo'";

			    				if (mysqli_query($conn, $sql)) 
			    				    {
  										header('Location:viewrequests.php');
		           					 } 
		    				
		    				        else {
		               						echo "Error: " . $sql . "" . mysqli_error($conn);
		            					}

}
elseif ($result=="Delete") {

			$sql="DELETE FROM `request_access` WHERE `uid`='$userinfo'";

			if (mysqli_query($conn, $sql)) 
					    				    {
		  										header('Location:viewrequests.php');
				           					 } 
				    				
				    				        else {
				               						echo "Error: " . $sql . "" . mysqli_error($conn);
				            					}
}
else
{
	echo "nothing to do shum shum";
}


}
 include"bottom.php";  ?>