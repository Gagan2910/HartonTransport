
<?php
/*verify staff*/
	include("dbconnection.php");
		
	$tstaffID       = $_POST["Staffid"];
	$tstaffPassword = $_POST["password"];

	$query = "select password from tblstafflogin where Staffid='$tstaffID'";
	
	$result = mysqli_query($connection, $query);

	$resultcheck=mysqli_num_rows($result);

	if ($resultcheck<1)
	{
	echo "Invalid Staff ID or password";
	}
	else
	{
                   $row=mysqli_fetch_assoc($result);
                     
                      $dbpassword= $row['password'];
                       
                     $hashedpassword=SHA512($tstaffPassword);
                     

                      if(strcmp("$hashedpassword","$dbpassword")== 0)
                      {
                      Header('Location:addservices.php');
                      }
                      else
                      { 
                         echo "Incorrect Staff ID or password";
                      }
                        
           }
	mysqli_close($connection);
?>