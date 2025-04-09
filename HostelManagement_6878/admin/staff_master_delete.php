<?php
$staffid=$_GET['x'];
include('connect.php');
$q=mysqli_query($con,"delete from staff_master where staffid=$staffid");
if($q)
    header('location:staff_master.php');
else
    echo "not delete";
?>