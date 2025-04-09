<?php
$id=$_GET['x'];
include('connect.php');
$q=mysqli_query($con,"delete from faq where id=$id");
if($q)
    header('location:faq.php');
else
    echo "not delete";
?>