<?php
$eventid=$_GET['x'];
include('connect.php');
$q=mysqli_query($con,"delete from event where eventid=$eventid");
if($q)
    header('location:event.php');
else
    echo "not delete";
?>