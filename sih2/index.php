<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Poppins:600i&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <title>Login form</title>
</head>

<body>
  <!-- <img class="wave" src="img3.png"> -->
  <div class="container">
    <div class="img">
      <!-- <img src="img4.svg"> -->
    </div>
    <div class="login">
      <form action="login.php" method="post">
        <img class="avatar" src="img.png">
        <h2>Welcome</h2>
        <div class="input-div">
          <div class="i">
            <i class="fas fa-user"></i>
          </div>
          <div>
            <h5></h5>
            <input type="text" class="input" placeholder="Username" name="userid">
          </div>
        </div>
        <div class="input-div">
          <div class="i">
            <i class="fas fa-user"></i>
          </div>
          <div>
            <h5></h5>
            <input type="password" class="input" name="pass" placeholder="Password">
          </div>
        </div>
        <a href="remail.php">Forgot Password</a>
        <input type="submit" class="btn" value="Login">
      </form>
    </div>
  </div>
  <script type="text/javascript" src="script.js"></script>
</body>

</html>