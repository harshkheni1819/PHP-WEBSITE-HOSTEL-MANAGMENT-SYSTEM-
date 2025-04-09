<?php
$staffdetailid=$_GET['x'];
include('connect.php');
$q=mysqli_query($con,"delete from staff_details where staffdetailid=$staffdetailid");
if($q)
    header('location:staff_details.php');
else
    echo "not delete";
?>