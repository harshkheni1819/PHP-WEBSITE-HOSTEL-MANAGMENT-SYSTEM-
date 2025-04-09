<?php
$id=$_GET['x'];
include('connect.php');
$q=mysqli_query($con,"delete from contactus where id=$id");
if($q)
    header('location:contactus.php');
else
    echo "not delete";
?>