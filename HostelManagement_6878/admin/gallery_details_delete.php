<?php
$gdid=$_GET['x'];
include('connect.php');
$q=mysqli_query($con,"delete from gallery_details where gdid=$gdid");
if($q)
    header('location:gallery_details.php');
else
    echo "not delete";
?>