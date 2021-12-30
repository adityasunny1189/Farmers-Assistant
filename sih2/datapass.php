<?php

session_start();
if(!isset($_SESSION['email']))
{
    ?>


    <script>
    window.location="index.php"
    
    </script>
    <?php
}
$codee=$_POST['code'];
if($codee!=$_SESSION['mess'])
{?>
<script>
alert('wrong code');
window.location="index.php";


</script>
<?php

}
$pass=$_POST['pass'];
$em=$_SESSION['email'];
$con=mysqli_connect("localhost","root");
if(!$con)
    
echo "not\n";
mysqli_select_db($con,'sih2');
$q=" UPDATE login SET password='$pass'
WHERE emailid='$em' ";


$result=mysqli_query($con,$q);

?>
    <script>
   alert('updated'); 
   window.location="index.php";
    </script><?php


?>


