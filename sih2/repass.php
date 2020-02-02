<?php
session_start();
?>
<?php

$email=$_POST['emailid'];

$_SESSION['email']=$email;

$con=mysqli_connect("localhost","root");
if(!$con)
    
echo "not\n";
mysqli_select_db($con,'sih2');
$q="SELECT * from login where emailid='$email' ";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num!=1)
{
    ?> <script> alert('email id does not matched');</script>
   
    <script>
        window.location="remail.php";
        </script>
        <?php
}

if($num==1)
{
    ?>
  <?php

$to = $_SESSION['email'];
$subject = "HTML email";





$message =mt_rand(1000,9999);

$_SESSION['mess']=$message;

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <tryfalmes.000webhost.com>' . "\r\n";


mail($to,$subject,$message,$headers);
?><script>
    alert('<?php echo $_SESSION['mess'] ?>');
alert('code sent');

</script>

    <!DOCTYPE html>
    <html>
        <head>
        <title>RESET PASSWORD</title>
<link rel="stylesheet" href="passcode.css">
</head>
<div class="cont">
<body>
<header id="mainhead"><H1>FARMERS-ASSISTANT</H1></header>
<form action="datapass.php" method="POST">

    <DIV class="get">
        <label>E-MAIL:</label>
        <input type="text"  value="<?php echo $_SESSION['email'];?>" disabled ></div>
<div class="get">
   <label>VERIFICATION CODE:</label>

    <INPUT type="password" name="code"></div>
        <div class="get">
      <label>NEW PASSWORD:</label>  
      <INPUT TYPE="password" name="pass"></div>
        <div class="get"> 
    <a href="#">
        <DIV class="button">
        
            <input type="submit" value="UPDATE PASSWORD" id="pass">
            
                </div>
    </a>
    
    </div>
</div>
</div>
</body>
</html>
<?php


}
?>