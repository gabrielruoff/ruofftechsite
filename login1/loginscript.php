<?php
  session_start();
require_once("dbconnect.php");
?>
<br>
<?php
$username = $_POST['username'];
$password = $_POST['password'];
if($username == ''){



sleep(2);
?>
<script>alert('Incorrect Username'); </script>

<?php
  header( "Refresh:2; url=https://ruofftechnologies.com/login1/login.php");
  mysqli_close($mysqli);
}

if($password == ''){



sleep(2);
?>
<script>alert('Please enter a password'); </script>

<?php
  header( "Refresh:2; url=https://ruofftechnologies.com/login1/login.php");
  mysqli_close($mysqli);
}
echo "error: ";

echo mysqli_error($mysqli);

$escusername = mysqli_real_escape_string($username);

?>
<br>
<?php
echo "encusername: ", $username;
$query = "SELECT password FROM users WHERE username='$username'";

$queryfinal = mysqli_query($mysqli, $query);


$resultrow = $queryfinal->fetch_assoc();

$result = $resultrow['password'];

$encpassword = password_hash($password, PASSWORD_DEFAULT);


?>
<br>
<?php
echo "password: ";
echo $password;
?>
<br>
<?php
echo "query: ";
echo $result;

if (password_verify($password, $result)) {

$t = time();

$_SESSION["time"] = $t;

  $_SESSION["username"] = $username;

  echo "success";

$session = "INSERT INTO sessions (username, login_time) VALUES ('$username', '$t')";

if ($mysqli->query($session)) {
}

  header('Location: https://ruofftechnologies.com/login1/home.php');


} 
else {
session_destroy();
?>
<script>alert('Username and password do not match'); </script>

<?php
  header( "Refresh:2; url=https://ruofftechnologies.com/login1/login.php");
?>
<br>
<?php
echo "failed";
}
?>
