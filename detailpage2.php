<?php
/*detail page2 to view services*/
include("header.php");
include("dbconnection.php");
$query="select * from tblservices where serviceID='102'";
$result=mysqli_query($connection,$query);
$result=mysqli_query($connection,$query);
echo"<center><a href=welcome.php><h3>Back</h3></a></center>";
echo"<h1>Harton Transport Services</h1><br>";
echo"<table align=center border=1 bgcolor=blue style=width:500px><tr> <td colspan=7> <h3 text-align=center>Details</h3> </td> </tr>";
 
	while($row=mysqli_fetch_row($result))
	{
		
		echo "<tr><td><center>  " . $row[0] . "</center></td></tr> ";
		echo "<tr><td><center> " . $row[1] . "</center></td></tr> ";
		echo "<tr><td><center> " . $row[2] . "</center></td></tr> ";
		echo "<tr><td><center> " . $row[3] . "</center> </td></tr>";
        echo "<tr><td><center><img src=images/" . $row[4] . ".></center></td></tr>";
		
	}
echo "</table><br>";


include("footer.php");
?>