<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>PASSWORD RESET</title>
<link rel="stylesheet" href="passmail.css">

</head>
<body>

  <HEADER id="mainhead"> <h1>FARMERS-ASSISTANT</h1></HEADER>
<div class="cont">
<form action="repass.php" method="POST">
    <div class="get">
    <label>E-MAIL ID</label>
    <input type="email" name="emailid"></div>
<div class="button">
<input type="submit" value="SEND EMAIL" id="pass"></div>
<br>
<br>
</div>
</form>
</div>
</body>

</html>