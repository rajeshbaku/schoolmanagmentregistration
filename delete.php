

<?php
SESSION_START();
$uiiid=$_SESSION['data'];
if(!isset($_SESSION['data']))
{
    header('location:login.php');
}


?>



<?php

//CONNECTION

$conn=mysqli_connect('localhost','root','','rakesh');
//DELETE
$delete="DELETE  from school where uid='$uiiid'";
$query=mysqli_query($conn,$delete);




?>
