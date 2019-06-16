
<?php
/*staff login*/
include("header.php");
include("dbconnection.php");
$Staffid=$password="";
function submit()
{

if ($_SERVER["REQUEST_METHOD"] == "POST") 
  {
     if (empty($_POST["Staffid"])||empty($_POST["password"])) 
     {
          echo  "Please enter required fields";
     } 
     else
    {
      include("dbconnection.php");
	    $staffID=$_POST["Staffid"];
	    $staffpassword=$_POST["password"];
        $query = "select password from tblstafflogin where Staffid='$staffID' ";
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
         $hashedpassword = hash('sha512', $staffpassword);
         if(strcmp("$hashedpassword","$dbpassword")== 0)
         {
            Header('Location:cms.php');
         }
         else
         { 
            echo "Incorrect Staff ID or password";
         }
                        
        }
    mysqli_close($connection);
    }
  }
}
?>
<tr><td colspan=2 class="showcontent"><h1>Welcome to Harton Transport</h1><br><div class="w3-container w3-center w3-animate-zoom"><img src="images/loginicon.png"  class="imagecenter"></div>
<p id="subheading">All staff members must have valid staff ID and password assigned at the time of joining.<br>Please follow the instructions before signing up.</p>

<form method=POST action=stafflogin.php>

	<table align=center border=1 style="background-color:blue"><tr> <td colspan=2> <h3 text-align="center">Staff login</h3> </td> </tr>
	       	<tr> <td> Enter StaffID </td> 
		     <td> <input class="contacttablealign" type=text name=Staffid><span class="error">*</span>
		     </td>
		    </tr>
		    <tr> <td> Enter Password </td> 
		     <td> <input class="contacttablealign" type=password name=password><span class="error">* </span>
		     </td>
		    </tr>
            <tr> <td></td>
		     <td> <input type=submit value="Login">
		     </td>
		    </tr>
            <tr><td colspan=2 class="error"><center><?php submit();?></center></td></tr>

  </table>
</form>
<?php
include("footer.php");
?>
