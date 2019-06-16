
<?php
/*customer login*/
include("header.php");
include("dbconnection.php");
function submit()
{
$email=$password="";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
  {
     if (empty($_POST["email"])||empty($_POST["password"])) 
     {
          echo  "Please enter required fields";
     } 
     else
     {
     include("dbconnection.php");
	$cemail = $_POST["email"];
	$cpassword = $_POST["password"];
	$query = "select email,password from tblcustomerregister where email='$cemail'";
	$result = mysqli_query($connection, $query);
    $resultcheck=mysqli_num_rows($result);
	    if ($resultcheck<1)
	     {
	        echo "Invalid email and password.Please click register to add new account ";
	     }
	     else
	    {
          $row=mysqli_fetch_assoc($result);
          $dbpassword= $row['password'];
          $hashedpassword = hash('sha512', $cpassword);
           if(strcmp("$hashedpassword","$dbpassword")== 0)
          {
           Header('Location:welcome.php');
          }
          else
           { 
           echo "Incorrect customer email or password.<br>";
           }  
         mysqli_close($connection);                      
         }
     }
  }
 }
?>
<h1>Harton Transport Limited</h1><p id="subheading"></p><br>
<form method=POST action=customerlogin.php>
    <table align=center border=1 style="background-color:blue">
      <tr><td colspan=2><h3 text-align="center">Customer Login</h3> </td></tr>
      <tr><td>Email</td><td><input class="contacttablealign" type=email name=email><span class="error">* </span></td></tr>
      <tr><td>Password</td><td><input class="contacttablealign" type=password name=password><span class="error">* </span></td></tr>
     <tr><td><a href="customerregister.php" style="color:black">Register</a></td><td><input type=submit value=Login style="height:50px;width:100px"></td></tr>
      <tr><td colspan=2 class="error"><center><?php submit()?></center></td></tr>
    </table>
</form><br><br>

<?php
include("footer.php");
?>
