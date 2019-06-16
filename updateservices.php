
<?php
/*update services*/
include("header.php");
include("dbconnection.php");
/*declaration of variables*/
    $sid= $_GET["serviceID"];
    $sname= $_GET["serviceName"];
    $sprice= $_GET["servicePrice"];
    $simage= $_GET["serviceImage"];
echo"<h3>Are you sure you want to update the services information?</h3>";
echo "<a href=confirmupdate.php?serviceID=$sid&serviceName=$sname&servicePrice=$sprice&serviceImage=$simage>Yes</a><br> <br>";
echo "<cms.php> No </a> <br><br>"; 
 mysqli_close($connection);
include("footer.php");
?>
