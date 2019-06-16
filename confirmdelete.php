<?php
/*confirm delete operation*/
include("dbconnection.php");
include("header.php");
$sid= $_GET["serviceID"];
$query=" DELETE FROM tblservices WHERE serviceID =" . $sid;
$result = mysqli_query($connection, $query);
header("Location: cms.php");
mysqli_close($connection);     
include("footer.php");       
?>