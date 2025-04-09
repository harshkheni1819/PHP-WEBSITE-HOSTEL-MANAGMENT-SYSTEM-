<?php
$roomid=$_GET['x'];
include('connect.php');
$q=mysqli_query($con,"delete from room_master where roomid=$roomid");
if($q)
    header('location:room_master.php');
else
    echo "not delete";
?>