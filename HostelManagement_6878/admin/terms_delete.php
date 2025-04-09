<?php
$id=$_GET['x'];
include('connect.php');
$q=mysqli_query($con,"delete from terms where id=$id");
if($q)
    header('location:terms.php');
else
    echo "not delete";
?>