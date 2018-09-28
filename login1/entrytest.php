<?php

echo "init check; ";

$check = 0;

$email = $_POST['email'];
$username = $_POST['username'];
$normalpassword = $_POST['password'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

if ($email != "") {

echo "Email OK; ";

} else {

$check = 1;

?>

<script>alert('Please enter a valid E-Mail Address'); </script>

<?php

header( "Refresh:0; url=https://ruofftechnologies.com/login1/register.html");

echo "Email Invalid; ";

}

if ($username != "") {

echo "Uname OK; ";

} else {

$check = 1;

?>

<script>alert('Please enter a valid Username'); </script>

<?php

header( "Refresh:0; url=https://ruofftechnologies.com/login1/register.html");

echo "Uname Invalid; ";

}

if ($password != "") {

echo "Password OK; ";

} else {

$check = 1;

?>

<script>alert('Please enter a valid Password'); </script>

<?php

header( "Refresh:0; url=https://ruofftechnologies.com/login1/register.html");

echo "Password Invalid; ";

}

echo "email: ";
echo $email;
echo " uname: ";
echo $username;
echo " normal_password: ";
echo $normalpassword;
echo " enc_password: ";
echo $password;
echo " ";

echo "Variables Defined; ";

$host = "localhost";
$user = "root";
$pass = "bighorse10";

$mysqli = new mysqli($host, $user, $pass, "dbtest");

echo "connected; ";

$insert = "INSERT INTO users (username, email, password) VALUES ('$username','$email','$password')";
$query = "SELECT password FROM users WHERE username='$username'";

echo "Query Vars defined; ";

echo $check;
echo " ";

if ($check === 0) {

$queryfinal = mysqli_query($mysqli, $query);

$querystr = $queryfinal->fetch_assoc();

echo "queried; ";

$querystrfinal = $querystr['password'];

echo "query: ";
echo $querystrfinal;
echo " ";

if ($querystrfinal == "") {

echo "!= check worked; ";

if ($mysqli->query($insert)) {

?>

<script>alert('Your account was successfully created! You will be re-directed to the log-in page'); </script>

<?php

header( "Refresh:0; url=https://ruofftechnologies.com/login1/login.html");

echo "inserted; ";

}

} else {

?>

<script>alert('There is already an account with that username or email address. If you already have an account, choose "log-in" on the homepage'); </script>

<?php

header( "Refresh:0; url=https://ruofftechnologies.com/login1/register.html");

echo "Uname/Email already in database; ";
}
} else {
echo "check didnt work";
}
?>
