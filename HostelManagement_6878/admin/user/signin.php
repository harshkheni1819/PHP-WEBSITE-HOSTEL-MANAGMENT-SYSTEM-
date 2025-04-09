<?php
if(isset($_POST['btnsignin']))
{
    $uname=$_POST['txtuname'];
    $password=$_POST['txtpassword'];
    $q=mysqli_query($con,"select * from user_master where uname='$uname' and password='$password'");
	 if($q)
    {
		
            echo "<script>alert('Inserted');</script>";
    }
    else
    {
        echo "<script>alert('Not Inserted');</script>";
    }
}
?>