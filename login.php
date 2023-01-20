<?php
$uname = $_POST['uname'];
$pass = $_POST['password'];
if($uname=="" || $pass=="")
{
die("all fields are required!! click the back button and fill in the empty fields.");
}
$myword = md5($pass);
include "dbconnect.php";

$dbQuery = "SELECT* FROM users WHERE username = '$uname' and password = '$myword' LIMIT 1";
$result = mysqli_query($db, $dbQuery) or die("Invalid user");	
if (mysqli_num_rows($result) == 1) {
$_SESSION['users'] = mysqli_fetch_array($result)[0];
header('Location: http://localhost/EPC/index.php');
} else {echo "Invalid Account please check the username and password and try again";}
?>