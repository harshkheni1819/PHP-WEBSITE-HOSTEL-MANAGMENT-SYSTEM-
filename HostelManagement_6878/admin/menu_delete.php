<?php
$fid=$_GET['x'];
include('connect.php');
$q=mysqli_query($con,"delete from menu where fid=$fid");
if($q)
    header('location:menu.php');
else
    echo "not delete";
?>