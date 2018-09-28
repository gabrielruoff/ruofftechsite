<!DOCTYPE html>
<html>
<title> How it Works - Ruoff Technologies </title>
<style>
ul ul {
    position: absolute;
    display: none;
}
li:hover ul {
    display: block;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 20px 26px;
    text-decoration: none;
}
li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;

li  :hover {
    background-color: #121;
}
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}

</style>

<Script>

</SCRIPT>


<head>
<link rel="shortcut icon" href="https://ruofftechnologies.com/pictures/favicon.ico">
<h1 style="text-align:center; font-size:35px;" ><SPAN style="color:grey;"> <img src="../pictures/Logo.png" height="65" width="70" align="middle" hspace="20"> Ruoff Technologies</span><SPAN style="color:blue;">.com</span>

<?php 

session_start();

if($_SESSION["username"] != "") {

?>


<span style="float: right; font-family:sans-serif; font-size:15px; line-height:250%; padding-right:25px;">  Logged in as: <?php $username = $_SESSION['username']; echo $username; ?>  <form action="https://ruofftechnologies.com/login1/home.php"> <input style="float:right;" type="submit" value="My Orders" /> </form>  <form action="https://ruofftechnologies.com/login1/logout.php">
    <input style="float:right;" type="submit" value="Logout" /> </form> </span>
<?php

} else {

header( "Refresh:0; url=https://ruofftechnologies.com/login1/login.php");

?>


<script> alert('You must be logged in to access this page. You will be re-directed to the log-in page.'); </script>

<span style="float: right; font-family:sans-serif; font-size:15px; line-height:250%; padding-right:25px;"> <form action="https://ruofftechnologies.com/login1/register.php"> <input type="submit" value="Sign Up" /> </form> 

<form action="https://ruofftechnologies.com/login1/login.php">
    <input type="submit" value="Sign In" /> </form> </span>

<?php

}

?>

</h1>

<ul>
  <li><a class="active" href="https://ruofftechnologies.com/homepage.php">Home</a></li>
  <li><a href="#">Products</a>
       <ul>
	<li><a href="https://ruofftechnologies.com/products/custompcs.php">Custom PCs</a></li>
	<li><a href="https://ruofftechnologies.com/products/quadcopters.php">Quadcopters</a></li>
       </ul>
   </li>
  <li><a href="https://ruofftechnologies.com/contact.php">Contact</a></li>
  <li><a href="https://ruofftechnologies.com/about.php">About</a></li>
</ul>

</head>


<body style="text-align:center">

<pre>


</pre>

<div style="margin: 30px; background-color:#cffff;height: 500px; border: 1px solid black; padding:0px; opacity: 0.6; filter: alpha(opacity=60);">

<p style="text-align:center; color:black; font-weight:bold; line-height:10%; font-size:40px;" > <u>How it Works</u> </p>
<p style="text-align:center; line-height:10%; font-size:25px;" > <i>A Guide To The Ruoff Technologies Site </i> </p>

<p style="font-family:sans-serif; text-align:center; font-size:20px; line-height:250%;"> 1. You fill out a google form telling us the specifications you want for your quadcopter </p>

<p style="font-family:sans-serif; text-align:center; font-size:20px; line-height:250%;"> 2. We read your responses and email you a follow-up email within 48 hours </p>

<p style="font-family:sans-serif; text-align:center; font-size:20px; line-height:250%;"> 3. You make the appropriate deposit (To prevent scams) </p>

<p style="font-family:sans-serif; text-align:center; font-size:20px; line-height:250%;"> 4. We build your quadcopter and ship it to you within 4 weeks! </p>

<a href='/contact.php'> <button onMouseOver="this.style.color='#000000'" onMouseOut="this.style.color='#ffffff'" style="padding-top:10px; padding-bottom:10px; padding-right:20px; padding-left:20px; border:none; float: center; background:green; margin:35px; color:white; cursor:pointer;"> Questions? Contact us! </button> </a>

</div>

<pre>


</pre>
 
<CENTER>


<!-- <img src="pictures/quad1.jpg" style="width:304px;height:228px;"> -->
</body>





</html>
