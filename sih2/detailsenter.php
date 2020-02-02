<?php
$uname=$_POST['username'];
$upass=$_POST['password'];
$em=$_POST['emailid'];

$con=mysqli_connect("localhost","root");
mysqli_select_db($con,'sih2');
$q="INSERT INTO login (username,password,emailid) VALUES ('$uname','$upass','$em')";
$status=mysqli_query($con,$q);
if($status)
{

?>
<script>
alert("INSERTED");
window.location="details.php";
</script>
<?php
}
else 
{

    ?>
    <script>
    alert("NOT INSERTED");
    window.location="details.php";
    </script>
    <?php

}

?>