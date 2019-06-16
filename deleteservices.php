<?php
/*delete services*/
include("dbconnection.php");
include("header.php");
$sid = $_GET["serviceID"];	
echo "<h3> Are you sure you want to delete the service information ? </h3>";
echo "<a href=confirmdelete.php?serviceID=$sid> Yes </a>  <br> <br>";
echo "<a href=cms.php> No </a> <br><br>"; 
mysqli_close($connection);     
 include("footer.php");       
?>