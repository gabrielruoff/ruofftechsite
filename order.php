<!DOCTYPE html>
<html>

<?php

session_start();

if($_SESSION["username"] == "") {

?>

<script>alert('You may only place an order if you are logged into an account. You will be re-directed to the sign-up page.'); </script>

<?php

header( "Refresh:0; url=https://ruofftechnologies.com/login1/register.php");

}

?>

<title> Place an Order - Ruoff Technologies </title>

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
<form id='' action='orderscript.php' method='post' accept-charset='UTF-8'>
<fieldset>
<legend>Purchase A Quadcopter</legend>

<input type='hidden' name='submitted' id='submitted' value='1'/>
 <p style="font-family:sans-serif; text-align:center; font-size:15px; line-height:250%; font-weight:bold;">Choose Frame Size (Number implies Motor Distance in mm EX: 250 size = 250mm from motor to motor) </p>

<input type="radio" name="frame" VALUE = "250" required/>
<label for='username' >250 Size Frame ~$10</label>
<br>
<input type="radio" name="frame" VALUE = "350" />
<label for='username' >350 Size Frame ~$12</label>
<br>
<input type="radio" name="frame" VALUE = "450" />
<label for='username' >450 Size Frame ~$30</label>
<br>
<input type='radio' name='frame' VALUE = "frameother"  maxlength="50"/>
<label for='username' >Other Frame (We'll email you about this)</label>
<pre>

</pre>
 <p style="font-family:sans-serif; text-align:center; font-size:15px; line-height:250%; font-weight:bold;">Choose Motor Size/Power </p>

<input type="radio" name="motors" VALUE = "2300" required/>
<label for='username' >2300kv Brushless Motor (Choose This Option for 250 Size Frame) ~$9.50 Each (4 Required)</label>
<br>
<input type="radio" name="motors" VALUE = "2300_350" />
<label for='username' >2300kv Brushless Motor (Choose This Option for 350 Size Frame) ~$17.50 Each (4 Required)</label>
<br>
<input type="radio" name="motors" VALUE = "935" />
<label for='username' >935kv Brushless Motor (Choose This Option for 450 Size Frame) ~$13 Each (4 Required)</label>
<br>
<input type='radio' name='motors' VALUE = "motorother"  maxlength="50"/>
<label for='username' >Different Motors (We'll email you about this)</label>
<pre>

</pre>
 <p style="font-family:sans-serif; text-align:center; font-size:15px; line-height:250%; font-weight:bold;">ESC's (Speed Controllers) </p>

<input type="radio" name="escs" VALUE = "12" required/>
<label for='username' >Afro 12Amp Escs With Pre-Flashed SimonK Firmware ~$10 Each (4 Required, Choose This With 250 Frame)</label>
<br>
<input type="radio" name="escs" VALUE = "12_350" />
<label for='username' >Afro 12Amp Escs With Pre-Flashed SimonK Firmware ~$10 Each (4 Required, Choose This With 350 Frame)</label>
<br>
<input type="radio" name="escs" VALUE = "20" />
<label for='username' >Afro 20Amp Escs With Pre-Flashed SimonK Firmware ~$12 Each (4 Required, Choose This With 450 Frame)</label>
<br>
<input type='radio' name='escs'  VALUE = "escsother"  maxlength="50"/>
<label for='username' >Different ESC's (We'll email you about this)</label>
<pre>

</pre>
 <p style="font-family:sans-serif; text-align:center; font-size:15px; line-height:250%; font-weight:bold;">Flight Controller </p>

<input type="radio" name="fcontroller" VALUE = "kk" required/>
<label for='username' >KK 2.1.5 (Currently Only Board Available) ~$20</label>

<pre>

</pre>
 <p style="font-family:sans-serif; text-align:center; font-size:15px; line-height:250%; font-weight:bold;">Do You Need To Buy a Radio?</p>

<input type="radio" name="radio" VALUE = "yesradio" required/>
<label for='username' >Yes (We (RT) will follow up with you on this post-submission)</label>
<br>
<input type="radio" name="radio" VALUE = "noradio" />
<label for='username' >No (I have a 5+ Channel Bindable Radio  Transmitter)/I want to add this myself</label>
<pre>

</pre>
 <p style="font-family:sans-serif; text-align:center; font-size:15px; line-height:250%; font-weight:bold;">Would You Like FPV Gear Included?</p>

<input type="radio" name="fpv" VALUE = "yesfpv" required/>
<label for='username' >Yes (We (RT) will follow up with you on this post-submission)</label>
<br>
<input type="radio" name="fpv" VALUE = "nofpv" />
<label for='username' >No/I want to add this myself </label>

<pre>

</pre>
<label for='username' >What State Do You Live In? (Currently only US residents are supported)</label>
<input type='text' name='state' id='state'  maxlength="50" required/>
<pre>

</pre>
<input type='submit' name='submit' value='Submit' />

</fieldset>
</form>




 <p style="font-family:sans-serif; text-align:center; font-size:15px; line-height:250%; font-weight:bold;"> Stay Connected: <a href="https://twitter.com/RTCustom_Drones" class="twitter-follow-button" data-show-count="false">Follow @RTCustom_Drones</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></p>
<CENTER>


<!-- <img src="pictures/quad1.jpg" style="width:304px;height:228px;"> -->
</body>





</html>
