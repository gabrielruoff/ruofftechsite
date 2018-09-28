<?php
session_start();
$litime = $_SESSION["time"];
$newtime = time();

echo "time 1: ";
echo $litime;
echo " ";
echo "time 2: ";
echo $newtime;


include_once "dbconnect.php";

$ltquery = "UPDATE sessions SET logout_time=$newtime WHERE login_time=$litime";

if ($mysqli->query($ltquery)) {
}

mysqli_close($mysqli);

session_unset();
session_destroy();
?>
<script> alert('You have been logged out'); </script>
<?php
header( "Refresh:0; url=https://ruofftechnologies.com/homepage.php");

?>
