<?php
  $matricno = $_POST['mat_no'];
  $sname = $_POST['name'];
  $dept = $_POST['dept'];
  $sex = $_POST['gender'];
  $level = $_POST['level'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $spname = $_POST['sponsor'];
  $spaddress = $_POST['saddress'];
  $spphone = $_POST['sphone'];
  include("dbconnect.php");
  $usercheck = "SELECT * FROM students WHERE mat_no='$matricno'";
  $usercheck2 = mysqli_query($db, $usercheck);
  while ($usercheck3 = mysqli_fetch_array($usercheck2)) {
    print "<table class='maintable'>";
    print "<tr class='headline'><td><center>Registering...</center></td></tr>";
    print "<tr class='forumrow'><td><center>";
    print "This student has already been allocated accomodation<br> <a href='search.php'> click here </a> to search for the student details.";
    print "</td></tr></table></center>";
    die();}
  $query = "SELECT * FROM halls WHERE status='active'";
  $row1 = mysqli_query($db, $query) or die("Username or Password not found");
  $row = mysqli_fetch_array($row1);
  $sn = $row["sn"];
  $hallname = $row["hall_name"];
  $location = $row["location"];
  $chief_potter = $row["chief_potter"];
  $status = $row["status"];
  $no_of_rooms = $row["no_of_rooms"];
  $offset = $row["offset"];
  if ($offset < $no_of_rooms) {
    $setstatus = "SELECT COUNT(*) as num FROM students WHERE hall ='$hallname' AND room = '$offset'";
    $total_rows = mysqli_fetch_array(mysqli_query($db, $setstatus));
    $counter = $total_rows['num'];
    if ($counter < 2) {
      $dbQuery = "INSERT INTO students(mat_no, name,sex,dept,level,phone,email,sponsor,saddress,sphone,hall,room) VALUES('$matricno', '$sname','$sex','$dept','$level','$phone','$email','$spname','$spaddress','$spphone','$hallname', '$offset')";
      $result = mysqli_query($db, $dbQuery);
      header('Location: search.php');
      die();
    } else if ($counter == 2) {
      $offset = $offset + 1;
      $query3 = "UPDATE halls SET offset = '$offset' WHERE hall_name= '$hallname'";
      $result3 = mysqli_query($db, $query3) or die("Couldn't UPDATE database");
      die();
    }
  } else if ($offset == $no_of_rooms) {
    $setstatus = "SELECT COUNT(*) as num FROM students WHERE hall ='$hallname' AND room = '$offset'";
    $total_rows = mysqli_fetch_array(mysqli_query($db, $setstatus));
    $counter = $total_rows['num'];
    if ($counter == 2) {
      $query4 = "UPDATE halls SET status = 'filled' WHERE sn= '$sn'";
      $result4 = mysqli_query($db, $query4) or die("Couldn't UPDATE database");

      $sn = $sn + 1;
      $query5 = "UPDATE halls SET status = 'active' WHERE sn= '$sn'";
      $result5 = mysqli_query($db, $query5) or die("Couldn't UPDATE database");
      die();  }   }
?>