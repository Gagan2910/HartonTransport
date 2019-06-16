
<?php
/*add services used by staff*/
include("header.php");
include("dbconnection.php");
$serviceID=$serviceName=$servicePrice=$serviceImage="";
function submit()
{
if ($_SERVER["REQUEST_METHOD"] == "POST") 
  {
     if (empty($_POST["serviceID"])|| empty($_POST["serviceName"])||empty($_POST["servicePrice"])
     ||empty($_POST["serviceImage"]) )
     {
          echo  "Please enter required fields";
     } 
    else 
     {
include("dbconnection.php");
$sid= $_POST["serviceID"];
$sname= $_POST["serviceName"];
$sdesc= $_POST["serviceDescription"];
$sprice= $_POST["servicePrice"];
$simage= $_POST["serviceImage"];
/*insert query to insert data into tblservices table*/
$query="insert into tblservices values('$sid', '$sname','$sdesc','$sprice','$simage')";
$rowsAffected=mysqli_query($connection,$query);
header('Location:cms.php');
mysqli_close($connection);
     }
  }
}
?>

<tr><td colspan=2 class="showcontent"><h1>Harton Transport Services</h1><p id="subheading"></p><br>
<form method=post  action=addservices.php>
<table align=center border=1 style="background-color:blue">                                                                                                  
<tr> <td colspan=2> <h3 text-align="center">Add Services Here</h3> </td> </tr>
                <tr><td>Enter Service ID</td>
       <td><input type=text name=serviceID><span class="error">*</span></td></tr>
       <tr><td>Enter Service Name</td>
       <td><input type=text name=serviceName><span class="error">* </span></td></tr>
      <tr><td>Enter Service Description</td>
       <td><textarea style="width:400px;height:60px" name=serviceDescription></textarea><span class="error">* </span></td></tr>
       <tr><td>Enter Service Price</td>
       <td><input type=text name=servicePrice><span class="error">*</span></td>
       </tr>
          <tr><td>Enter Service image</td>
       <td><input type=text name=serviceImage><span class="error">*</span></td>
       </tr>
         <tr><td><a href=cms.php style="color:black"><img src=images/cancel.png>Cancel</a></td>
       <td><input type=submit value="Add"></td></tr>
       </tr>
       <tr><td colspan=2 class="error"><center><?php submit();?></center></td></tr>
</table>
</form>
<?php
 include("footer.php");
?>