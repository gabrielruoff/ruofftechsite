<?php

require_once "/var/www/html/login1/dbconnect.php";

session_start();

$username = $_SESSION['username'];

$frame = $_POST['frame'];

echo $frame;

$motors = $_POST['motors'];

echo $motors;

$escs = $_POST['escs'];

echo $escs;

$fcontroller = $_POST['fcontroller'];

echo $fcontroller;

$transmitter = $_POST['radio'];

echo $transmitter;

$fpv = $_POST['fpv'];

echo $fpv;

$state = $_POST['state'];

echo $state;

$selectquery = "SELECT id FROM orders WHERE username='$username'";

$selectqueryfinal = mysqli_query($mysqli, $selectquery);

$querystr = $selectqueryfinal->fetch_assoc();

$selectquerystrfinal = $querystr['id'];

echo " Querystr: ";
echo $selectquerystrfinal;

$insertorder = "INSERT INTO orders (username, frame, motors, escs, fcontroller, radio, fpv, state) VALUES ('$username', '$frame', '$motors', '$escs', '$fcontroller', '$transmitter', '$fpv', '$state')";

if ($selectquerystrfinal == "") {

if ($mysqli->query($insertorder)) {
}

} else {
?>

<script>alert('It seems that you have already submitted an order! You may mange your orders from your account page. If you would like to place multiple orders at once, please email us at ruofftechnologies@gmail.com.'); </script>

<?php

header( "Refresh:0; url=https://ruofftechnologies.com/order.php");

}
?>
