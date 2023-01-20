<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> FCET | New Hall Registration</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="section">
    <h1> FEDERAL COLLEGE OF EDUCATION (TECH), AKOKA </h1>
    <h1> HOSTEL ALLOCATION SYSTEM </h1>
    <div class="container">
      <form action="regHall.php" method="post">
        <h1> HALL REGISTRATION </h1>
        <div class="row">
          <div class="col-25"> <label for="hall_name">Hall Name</label>
          </div>
          <div class="col-75">
            <input type="text" id="hall_name" name="hall_name" >
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="location">Location</label>
          </div>
          <div class="col-75">
            <input type="text" id="location" name="location" >
          </div>
        </div>
        <div class="row">
          <div class="col-25"><label for="potter">Chief Potter</label>
          </div>
          <div class="col-75">
            <input type="text" id="potter" name="potter" >
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="rooms">Number of Rooms</label>
          </div>
          <div class="col-75">
            <input type="number" id="rooms" name="rooms" >
          </div>
        </div>
        <div class="row">
          <div class="col-25"> <br>
        <div class="row"><input type="submit" value="Register">
        </div>
      </form>
    </div>
</body>
</html>