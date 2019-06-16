<?php
/*edit services page*/
include("header.php");
include("dbconnection.php");
$sid= $_GET["serviceID"];
$query="select * from tblservices where serviceID=".$sid;
$result=mysqli_query($connection,$query);
$row = mysqli_fetch_row($result);
echo"<h1>Harton Transport Services</h1>"."<br>";
echo"<form method=GET action=updateservices.php>";
echo "<table align=center border=1 bgcolor=blue><tr> <td colspan=7> <h3 text-align=center>Edit Services Here</h3> </td> </tr>";
echo "<tr><td>Enter Service ID</td>";
echo "<td><input type=text name=serviceID value=$sid><span class=error>*<?php submit()?> </span></td></tr>";
echo "<tr><td>Enter Service Name</td>";
echo "<td><input type=text name=serviceName value=" . $row[1] . "><span class=error>*<?php submit()?> </span></td></tr>";
echo "<tr><td>Enter Service Price</td>";
echo " <td><input type=text name=servicePrice value=" . $row[3] . "><span class=error>* <?php submit()?></span></td>";
echo "</tr>";
echo "<tr><td>Enter Service image</td>";
echo "<td><input type=text name=serviceImage value=" . $row[4] . "><span class=error>*<?php submit()?> </span></td>";
echo "</tr>";
echo "<tr><td><a href=cms.php style=color:black><img src=images/cancel.png>Cancel </a></td>";
echo "<td><input type=submit value=Update></td></tr>";
echo "</table>";
mysqli_close($connection);
echo "</form><br><br>";
include("footer.php");
?>

