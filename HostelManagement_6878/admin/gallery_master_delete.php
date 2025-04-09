<?php
$gid=$_GET['x'];
include('connect.php');
$q=mysqli_query($con,"delete from gallery_master where gid=$gid");
if($q)
    header('location:gallery_master.php');
else
    echo "not delete";
?>