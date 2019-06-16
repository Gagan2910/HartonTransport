<?php
/*index page*/

include("header.php");
include("dbconnection.php");

echo"<h1>Harton Transport Limited</h1><p id=subheading>Harton Transport is an Auckland based transport company.Its been in the fleet of 45 trucks.<br> Harton now carries over 1000 of imports and exports a year.It currently employs 10 staff and operates in South Auckland.<br>It is based in 6/19 Roanoke Way, Albany, Auckland, 1000 , New Zealand.</p><br><br>";
?>
<table align="center" cellspacing="30" border=0>
<tr><td colspan=4><figure><div class="zoom"><img src="images/Freightdelivery.jpg" alt="hello" style="width:180px;height:150px"><figcaption>Freight Delivery</figcaption></figure></div></td>
<td><figure><div class="zoom"><img src="images/customclearance.png" alt="hello" style="width:180px;height:150px"><figcaption>Custom Clearance</figcaption></figure></div></td>
<td><figure><div class="zoom"><img src="images/importexport.jpg" alt="hello" style="width:180px;height:150px"><figcaption>Import Export</figcaption></figure></div></td>
<td><figure><div class="zoom"><img src="images/courierservices.png" alt="hello" style="width:180px;height:150px"><figcaption>Courier Services</figcaption></figure></div></td>
<td><figure><div class="zoom"><img src="images/housemoving.jpg" alt="hello" style="width:180px;height:150px"><figcaption>House Moving</figcaption></figure></div></td>
</tr></table><br><br>
<?php

include("footer.php");
mysqli_close($connection);
?>
