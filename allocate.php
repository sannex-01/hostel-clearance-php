<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> FCET | New Student Allocation</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="section">
    <h1> FEDERAL COLLEGE OF EDUCATION (TECH), AKOKA </h1>
    <h1> HOSTEL ALLOCATION SYSTEM </h1>
    <div class="container">
      <form action="allocation.php" method="post">
        <h1> STUDENT FORM </h1>
        <div class="row">
          <div class="col-25"> <label for="name">Student Name</label>
          </div>
          <div class="col-75">
            <input type="text" id="name" name="name" placeholder="New student name..">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="gender">Gender</label>
          </div>
          <div class="col-75">
            <select id="gender" name="gender">
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="dept">Department</label>
          </div>
          <div class="col-75">
            <input type="text" id="dept" name="dept" placeholder="New student department..">
          </div>
        </div>
        <div class="row">
          <div class="col-25"><label for="level">Level</label>
          </div>
          <div class="col-75">
            <input type="text" id="level" name="level" placeholder="New student level..">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="mat_no">Matric Number</label>
          </div>
          <div class="col-75">
            <input type="text" id="mat_no" name="mat_no" placeholder="New student  matric number..">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="phone">Phone</label>
          </div>
          <div class="col-75">
            <input type="number" id="phone" name="phone" placeholder="New student phone number..">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="email">Email</label>
          </div>
          <div class="col-75">
            <input type="mail" id="email" name="email" placeholder="New student email..">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="sponsor">Sponsor's Name</label>
          </div>
          <div class="col-75">
            <input type="text" id="sponsor" name="sponsor" placeholder="Student sponsor's name..">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="saddress">Sponsor's Address</label>
          </div>
          <div class="col-75">
            <input type="text" id="saddress" name="saddress" placeholder="Student sponsor's address..">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="sphone">Sponsor's Phone</label>
          </div>
          <div class="col-75">
            <input type="number" id="sphone" name="sphone" placeholder="sponsor phone number..">
          </div>
        </div> <br>
        <div class="row"><input type="submit" value="Submit">
        </div>
      </form>
    </div>
</body>
</html>