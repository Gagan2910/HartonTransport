
<?php
/*Confirm update*/
include("header.php");
include("dbconnection.php");
$sid= $_GET["serviceID"];
$sname= $_GET["serviceName"];
$sprice= $_GET["servicePrice"];
$simage= $_GET["serviceImage"];
/*Update query to UPDATE data into tblservices table*/
$query="update tblservices set serviceName = '$sname',servicePrice='$sprice',serviceImage='$simage' where serviceID='$sid'";
$result = mysqli_query($connection, $query);
header("Location: cms.php");
include("footer.php");
?>
