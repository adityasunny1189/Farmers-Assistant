<?php
session_start();
$id=$_POST['userid'];
$password=$_POST['pass'];

$con=mysqli_connect("localhost","root");
if(!$con)
    
echo "not\n";
mysqli_select_db($con,'sih2');
$q="SELECT * from login where username='$id' && password='$password' ";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
    ?> <script> alert('u_p correct');</script>
    <?php
    $_SESSION['userid']=$id;
    ?>
    <script>
        window.location="main.php";
        </script>
        <?php
}
else
{
?> <script>
    alert('wrong user is and password');
    window.location="index.php";
    </script>
    <?php
}
?>




