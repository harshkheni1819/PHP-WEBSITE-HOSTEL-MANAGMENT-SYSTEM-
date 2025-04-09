<?php
$rdid=$_GET['x'];
include('connect.php');
$q=mysqli_query($con,"delete from room_details where rdid=$rdid");
if($q)
    header('location:room_details.php');
else
    echo "not delete";
?>