<?php
/*welcome page*/
include("header.php");
include("dbconnection.php");
?>
<center><a href=index.php><h3>Logout</h3></a></center> 
<h1>Welcome to Harton Transport Limited</h1><p id="subheading">We offer following services to our customers</p><br>
<table align="center" cellspacing="30" border=0>
<tr><td colspan=4><figure><div class="zoom"><a href="detailpage1.php"><img src="images/Freightdelivery.jpg" alt="hello" style="width:180px;height:150px"><figcaption>Freight Delivery</figcaption></figure></a></div></td>
<td><figure><div class="zoom"><a href="detailpage2.php"><img src="images/customclearance.png" alt="hello" style="width:180px;height:150px"><figcaption>Custom Clearance</figcaption></figure></a></div></td>
<td><figure><div class="zoom"><a href="detailpage3.php"><img src="images/importexport.jpg" alt="hello" style="width:180px;height:150px"><figcaption>Import Export</figcaption></figure></a></div></td>
<td><figure><div class="zoom"><a href="detailpage4.php"><img src="images/courierservices.png" alt="hello" style="width:180px;height:150px"><figcaption>Courier Services</figcaption></figure></a></div></td>
<td><figure><div class="zoom"><a href="detailpage5.php"><img src="images/housemoving.jpg" alt="hello" style="width:180px;height:150px"><figcaption>House Moving</figcaption></figure></a></div></td>
</tr></table><br><br>
<?php
include("footer.php");
?>