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
        window.location="resetpassword.php";
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
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <form action="datapass.php" method="post">
        <input type="text"  value="<?php echo $_SESSION['email'];?>" disabled >
        <input type="text" name="code" >
        <input type="text" name="pass" id="p">
        <input type="submit" value="updatepassword">

        </form>
    </body>
    </html>



<?php


}
?>
