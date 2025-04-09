<?php
$id=$_GET['x'];
include('connect.php');
$q=mysqli_query($con,"delete from news where id=$id");
if($q)
    header('location:news.php');
else
    echo "not delete";
?>