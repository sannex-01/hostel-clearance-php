<?php
$hallname = $_POST['hall_name'];
$location = $_POST['location'];
$rooms = $_POST['rooms'];
$potter = $_POST['potter'];
$offset = 1;
include("dbconnect.php");
$usercheck = "SELECT * FROM halls WHERE hall_name='$hallname' LIMIT 1";
$usercheck2 = mysqli_query($db, $usercheck);
while ($usercheck3 = mysqli_fetch_array($usercheck2)) {
  print "<table class='maintable'>";
  print "<tr class='headline'><td><center>Updating Hall...</center></td></tr>";
  print "<tr class='forumrow'><td><center>";
  print "The hall you are trying to update already exists, please<a href='update.php'>Click to update another hall</a>.";
  print "</td></tr></table></center>";
  die();  }
$dbQuery = "INSERT INTO halls(hall_name,location,chief_potter,no_of_rooms,offset)                           
VALUES('$hallname','$location','$potter','$rooms','$offset')";
$result = mysqli_query($db, $dbQuery);
echo "<br /><br /><center><blink>Hall update was successfull...<a href='update.php'>Click to update another hall</a>.</blink></center>";
//set status of first hall active    
$setstatus = "SELECT COUNT(*) as num FROM halls";
$total_rows = mysqli_fetch_array(mysqli_query($db, $setstatus));
$total_rows = $total_rows['num'];
if ($total_rows == 1) {
  $query = "UPDATE halls SET status = 'active' WHERE sn != ''";
  $result = mysqli_query($db, $query) or die("Couldn't update database");
} die();
?>