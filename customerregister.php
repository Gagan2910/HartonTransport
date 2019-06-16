<?php
/*customerregistration form*/
include("header.php");
include("dbconnection.php");
function submit()
{
    $firstname=$lastname=$email=$password=$confirmpassword=$mobile=$gender="";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
  {
     if (empty($_POST["firstname"])|| empty($_POST["lastname"])||empty($_POST["email"])
     ||empty($_POST["password"])||empty($_POST["confirmpassword"])||empty($_POST["mobile"])||empty($_POST["gender"]) )
     {
          echo  "Please enter required fields";
     } 
    else 
     {
      include("dbconnection.php");
      $cfn=$_POST["firstname"];
      $cln=$_POST["lastname"];
      $cemail=$_POST["email"];
      $cp=$_POST["password"];
      $ccp=$_POST["confirmpassword"];
      $cmobile=$_POST["mobile"];
      $cgender=$_POST["gender"];
      $hashedpassword = hash('sha512', $cp);
      $hashedconfirmpassword = hash('sha512', $ccp);
      if(strlen("$cp")<8)
      {
          echo "Password must be 8 characters long";
      }
      else if (strcmp("$hashedpassword","$hashedconfirmpassword")==0)
      {
      $query = "select email from tblcustomerregister where email='$cemail'";
      $result = mysqli_query($connection, $query);
      $resultcheck=mysqli_num_rows($result);
      if( $resultcheck<1)
       {
         $query="insert into tblcustomerregister values('$cfn','$cln','$cemail','$hashedpassword','$cmobile','$cgender')";
         $result = mysqli_query($connection, $query);
         header('Location:customerlogin.php'); 
       }
      
       else
       {
            echo "Email already exists please enter different email address";
       }
      }
      else{echo "Password and confirm password doesn't match";}
     mysqli_close($connection);
     }
  }
  
}
?>
<h1>New Customers Please Register First</h1><br>
<center><a href=customerlogin.php>Already registered?Please<h3>Login</h3></a></center> 
<form method=POST action=customerregister.php>
<table align=center border=1 style=background-color:blue>
<tr><td colspan=2><h3 text-align=center>REGISTER</h3> </td></tr>
<tr><td>Firstname</td><td><input class=contacttablealign type=text name=firstname><span class=error>* </span></td></tr>
<tr><td>Lastname</td><td><input class=contacttablealign type=text name=lastname><span class=error>* </span></td></tr>
<tr><td>Email</td><td><input class=contacttablealign type=email name=email><span class=error>* </span></td></tr>
<tr><td>Password</td><td><input class=contacttablealign type=password name=password><span class=error>* </span></td></tr>
<tr><td>Confirm Password</td><td><input class=contacttablealign type=password name=confirmpassword><span class=error>* </span></td></tr>
<tr><td>Mobile</td><td><input class=contacttablealign type=text name=mobile><span class=error>* </span></td></td></tr>
<tr><td>Gender</td><td>
<input type=radio name=gender value=female>Female
<input type=radio name=gender value=male>Male
<input type=radio name=gender value=other>Other
<span class=error>* </span></td></tr>
<tr><td>Comments</td><td><textarea style=width:400px;height:60px name=comments></textarea></td></tr>
<tr><td></td><td><input type=submit value=Submit style=height:50px;width:100px></td></tr>
<tr><td colspan=2 class=error><center><?php submit()?></center></td><tr>
</table>
</form>
<?php
include("footer.php");
?>






