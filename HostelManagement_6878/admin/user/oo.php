<?php
        include('connect.php');
?>

<?php
 //error_reporting(0);
 session_start();
 if(isset($_POST['verify_email']))
 {
    
 $otp = $_POST["otp"];
 $otp=$_SESSION['sotp'];
 echo $otp .$otp1;
  if($otp==$otp1)
 {
      $q=mysqli_query($con,"update user_master set status=1 where email='$email' and otp ='$otp' ");
      
        if ($q)
        {
            echo "Verification code ";
            header("location:index.php");
        }
        else
        {
            echo "not";
        }
 
        echo "You can login now.";
        // exit();
    }
}
?>


<form method="POST">

    <input type="text" name="otp" placeholder="Enter verification code" required />

    <input type="submit" name="verify_email" value="Verify Email">
</form>