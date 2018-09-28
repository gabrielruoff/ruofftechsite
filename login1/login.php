<!DOCTYPE html>
<html>


<title> Ruoff Technologies | Custom Built Quadcopters and PC's </title>

<meta name="description=" content="Ruoff Technologies is a Maryland-based company that sells custom built quadcopters and pcs">

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


<br>
<br>
<br>
<form id='login' action='loginscript.php' method='post' accept-charset='UTF-8'>
<fieldset>
<legend>Login</legend>
<input type='hidden' name='submitted' id='submitted' value='1'/>
 
<label for='username' >UserName*:</label>
<input type='text' name='username' id='username'  maxlength="50" />
 
<label for='password' >Password*:</label>
<input type='password' name='password' id='password' maxlength="50" />
<br>

 <br> 
<input type='submit' name='Login' value='Login' />
 <p style="font-family:sans-serif; text-align:center; font-size:15px; line-height:250%;"> Don't Have An Account? <a href="https://ruofftechnologies.com/login1/register.php"> Sign Up! </a> </p>
</fieldset>
</form>


 <p style="font-family:sans-serif; text-align:center; font-size:15px; line-height:250%; font-weight:bold;"> Stay Connected: <a href="https://twitter.com/RTCustom_Drones" class="twitter-follow-button" data-show-count="false">Follow @RTCustom_Drones</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></p>
<CENTER>


<!-- <img src="pictures/quad1.jpg" style="width:304px;height:228px;"> -->
</body>





</html>
