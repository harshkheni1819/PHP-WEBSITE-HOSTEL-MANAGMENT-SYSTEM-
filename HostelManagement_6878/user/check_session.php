<?php
 //$con = mysqli_connect("localhost", "root", "", "byr");
 //error_reporting(0);
 session_start();
 $uid = $_SESSION['uid'];
 $roomid= $_GET['x'];
 if(isset($uid))
 {
    echo "<script>window.location.href = 'booking.php?x=$roomid'</script>";
 }
 else{
    echo "<script>window.location.href = '../user/r.php'</script>";
}
?>
 