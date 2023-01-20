<?php
$staffid = $_POST['staffid'];
$staffname = $_POST['staffname'];
$uname = $_POST['uname'];
$pass = $_POST['password'];
if ($staffid == "" || $staffname == "" || $uname == "" || $pass == "") {
  die("all fields are required!! click the back button and fill in the empty fields."); }
include("dbconnect.php");
$usercheck = "select * from users where username='$uname'";
$usercheck2 = mysqli_query($db, $usercheck);
while ($usercheck3 = mysqli_fetch_array($usercheck2)) {
  print "<table class='maintable'>";
  print "<tr class='headline'><td><center>Registering...</center></td></tr>";
  print "<tr class='forumrow'><td><center>";
  print "The username(email address) you are trying to register already exists, please <A href='userform.php'>Try to register           again</a>.";
  print "</td></tr></table></center>";
  die();  }
$myword = md5($pass);
$dbQuery = "INSERT INTO users(staff_id,name,username,password) VALUES('$staffid','$staffname','$uname','$myword')";
$result = mysqli_query($db, $dbQuery);
echo "<br /><br /><center><blink>Account was successfully created...</blink></center>";
die();
?>