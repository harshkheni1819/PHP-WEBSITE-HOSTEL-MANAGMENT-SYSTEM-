<?php
$id=$_GET['x'];
include('connect.php');
$q=mysqli_query($con,"delete from aboutus where id=$id");
if($q)
    header('location:aboutus.php');
else
    echo "not delete";
?>