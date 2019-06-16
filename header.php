
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="stylesheet1.css" >
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="bootstrap.min.css">
<script src="bootstrap.min.js"></script>
</head>

<body>
<table align="center" border=0 width="100%">
<tr><td colspan=2 class="navmenu"><div class="logo"><img src="images/hartontransportlogo.png" ></div>
<div><ul>
<li><a href="contactus.php">Contactus</a></li>
<li><a href="customerregister.php">Customer</a></li>
<li><a href="stafflogin.php">Staff Login</a></li>
<li><a href="services.php">Services</a></li>
<li><a href="index.php">Home</a></li>
</ul></div></td></tr>
<tr><td colspan=2 class="header"><img class="headerimage w3-animate-fading" src="images/truckimage5.jpg"><img src="images/truckimage6.png" class="headerimage w3-animate-fading"><img src="images/truckimage9.jpg" class="headerimage w3-animate-fading"><img src="images/truckimage10.png" class="headerimage w3-animate-fading"></td></tr>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("headerimage");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 8000);    
}
</script>
<tr><td colspan=2 class="showcontent">