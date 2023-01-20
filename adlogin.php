<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> FCET | Admin Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="section">
    <h1> FEDERAL COLLEGE OF EDUCATION (TECH), AKOKA </h1>
    <h1> CLEARANCE SYSTEM </h1>
    <div class="container">
      <form action="login.php" method="post">
        <h1> HOSTEL ALLOCATION SYSTEM </h1>
        <div class="row">
          <div class="col-25"><label for="uname">Username</label>
          </div>
          <div class="col-75">
            <input type="text" id="uname" name="uname" >
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="password">Password</label>
          </div>
          <div class="col-75">
            <input type="password" id="password" name="password" >
          </div>
        </div>
        <div class="row">
          <div class="col-25"><br>
        <div class="row">
          <input type="submit" value="Login">
        </div>
      </form>
    </div>
</body>
</html>