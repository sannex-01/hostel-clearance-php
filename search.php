<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> FCET | Search Hostel</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="section">
    <h1> FEDERAL COLLEGE OF EDUCATION (TECH), AKOKA </h1>
    <h1> HOSTEL ALLOCATION SYSTEM </h1>
    <div class="container">
      <form action="search.php" method="post">
      <h1> SEARCH PAGE </h1>
      <div class="row">
        <div class="col-25">
          <label for="mat_no">Enter Student Matric Number? </label>
        </div>
        <div class="col-75">
          <input type="text" id="mat_no" name="mat_no" placeholder="e.g 190203001..">
        </div>
      </div><br>
      <div class="row"><input type="submit" value="Search"> </div>
        </form>
        <?php
        $matricno = $_POST['mat_no'];
          include "dbconnect.php";
          $dbQuery = "SELECT * FROM students WHERE mat_no = '$matricno' LIMIT 1";
          $result = mysqli_query($db, $dbQuery) or die("Couldn't get file list");

          while ($row = mysqli_fetch_array($result)) {
            $mat_no = $row["mat_no"];
            $name = $row["name"];
            $sex = $row["sex"];
            $dept = $row["dept"];
            $level = $row["level"];
            $phone = $row["phone"];
            $email = $row["email"];
            $sponsor = $row["sponsor"];
            $saddress = $row["saddress"];
            $sphone = $row["sphone"];
            $hall = $row["hall"];
            $room = $row["room"];

            echo "<br><h3>This student's allocation details are as shown below:</h3><br>";
            echo " Student's Name: $name <br>";
            echo " Matric No./Reg. No.: $mat_no<br>";
            echo " Sex: $sex <br>";
            echo " Department: $dept<br>";
            echo " Level: $level <br>";
            echo " Email address: $email <br>";
            echo " Student's phone No.: $phone <br>";
            echo " Sponsor: $sponsor <br>";
            echo " Sponsor's address: $saddress<br>";
            echo " Sponsor phone No.: $sphone<br>";
            echo " Hall allocated: $hall <br>";
            echo " Room No. allocated: $room<br><br>";
            die();
          }        
        ?>
    </div>
  </div>
</body>
</html>