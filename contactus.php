<?php
/*contactus*/
include("header.php");
include("dbconnection.php");
$nameErr = $emailErr ="";
$name=$email="";
$message="";
function submit()
{
if ($_SERVER["REQUEST_METHOD"] == "POST") 
  {
     if (empty($_POST["name"])|| empty($_POST["email"])) 
     {
          echo  "Required";
     } 
    else 
     {
       echo "<div>Thanks for your enquiry.We will get back to you soon .</div>";
      //Header('Location:index.php');
     
     }
  }
}
?>
<h1>Contact us<br>(+64)2102502419<br>hartontransport@gmail.com<br></h1><p id="subheading">We are available from Monday-Friday at 7am to 5pm.<br>You are most welcome to call us or email us anytime between 7am till 5pm.<br>Our Customers are our priority and we do best Customer Service to come upon your solutions as per your demands.</p><br>
<form method=post action=contactus.php>
<div>
<div class="contactcolumn"><img src="images/location.png"></div>
<div class="contactcolumn">
<table style="background-color:blue">
<tr><td colspan=2><h1>Contact us for more information</h1></td></tr>
<tr><td>Name</td><td><input class="contacttablealign" type=text name=name><span class="error">* <?php submit()?></span></td></tr>
<tr><td>Email</td><td><input class="contacttablealign" type=text name=email><span class="error">* <?php submit()?></span></td></tr>
<tr><td>Phone</td><td><input class="contacttablealign" type=text name=phone></td></tr>
<tr><td>Comments</td><td><textarea style="width:400px;height:60px" name=comments></textarea></td></tr>
<tr><td></td><td><input type=submit value=Submit style="height:50px;width:100px"></td></tr>
</table></div></div>
</form>
<?php
include("footer.php");
?>