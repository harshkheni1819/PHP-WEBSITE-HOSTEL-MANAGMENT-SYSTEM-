<?php
$fid=$_GET['x'];
include('connect.php');
$q=mysqli_query($con,"delete from facility_master where fid=$fid");
if($q)
    header('location:facility_master.php');
else
    echo "not delete";
?>