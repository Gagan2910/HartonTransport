<?php
/*cms used by staff*/
include("header.php");
include("dbconnection.php");
$query="select * from tblservices";
$result=mysqli_query($connection,$query);
echo"<h1>Harton Transport Services</h1>"."<br>";
echo"<center><a href=index.php><h3>Logout</h3></a></center>";
echo "<table align=center border=1 bgcolor=blue><tr> <td colspan=7> <h3 text-align=center>Content Management Service</h3> </td> </tr>";
echo "<tr><td><h5> Service ID </h5></td> <td align=center><h5> Service Name</h5> </td><td align=center><h5>Service Description</h5></td><td align=center><h5> Service Price(NZD)</h5></td><td><center><h5> Service Image</h5></center></td><td><h5>Edit</h5></td><td><h5>Delete</h5></td></tr>";
	while($row = mysqli_fetch_row($result))
	{
		echo "<tr> ";
		echo "<td>  " . $row[0] . "</td> ";
		echo "<td> " . $row[1] . "</td> ";
		echo "<td> " . $row[2] . "</td> ";
		echo "<td> " . $row[3] . " </td>";
        echo "<td><img src=images/" . $row[4] . ".></td>";
		echo "<td align=center><a href=editservices.php?serviceID=".$row[0]."><img src=images/edit.png></a> </td>";
        echo "<td align=center><a href=deleteservices.php?serviceID=".$row[0] . "><img src=images/delete.png></a> </td>"; 
		echo "</tr>";
	}
echo "</table><br>";
echo"<h5><center><a href=addservices.php>ADD</a></center></h5><br><br>";
mysqli_close($connection);
include("footer.php");
?>