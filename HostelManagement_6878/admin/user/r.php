 <?php
  session_start();
  include ('connect.php');
  ?>

<!doctype html>
<html>

<head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="l.jpg" type="image/png">
        <title>AASHRAY STAY</title>
        
    <link rel="stylesheet" href="css/r.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    
</head>

    <body>
        
    <link href='https://fonts.googleapis.com/css?family=Roboto:900,900italic,500,400italic,100,700italic,300,700,500italic,100italic,300italic,400' rel='stylesheet' type='text/css'>

<div id="fback"><div class="girisback"></div>
<div class="kayitback"></div></div>

<div id="textbox">
  <div class="toplam">

    <div class="left">
      <div id="ic">
        <h2>Sign Up</h2>
        <?php

if(isset($_POST['btnins']))
{
    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $mobileno=$_POST['mobileno'];
    $birthdate=$_POST['birthdate'];
    $purpose=$_POST['purpose'];
    $otp=rand(999,9999);
    $subject="Hostel Registration Verification";
    $message="Your OTP is ".$otp;
    $q=mysqli_query($con,"insert into user_master values('','$uname','$email','$password','$mobileno','$birthdate','$purpose',0,'$otp')");
    if($q)
    {
      
      
     $_SESSION['uname']=$row['uname'];
     $_SESSION['email']=$email;
      $_SESSION['mobileno']=$row['mobileno'];
      $_SESSION['otp']=$otp;
      mail($email,$subject, $message);
        echo "<script>alert('Inserted');</script>";
        header('location:oo.php');
    }
    else
    {
        echo "<script>alert('Not Inserted');</script>";
    }


}
?>
       
        <form id="girisyap" name="signup_form" id="signup_form" method="post" enctype="multipart/form-data">
       
          <div class="yarim form-group">
            <label class="control-label" for="inputNormal">Username</label>
            <input type="text" name="uname" id="uname" class="bp-suggestions form-control" cols="50" rows="10" ></input>
          </div>
      <div class="form-group">
        <label class="control-label" for="inputNormal">Email</label>
        <input type="text" name="email" id="email" class="bp-suggestions form-control" cols="50" rows="10"></input>
    </div>
    <div class="form-group">
      <label class="control-label" for="inputNormal">Password</label>
      <input type="password" name="password" id="password"  class="bp-suggestions form-control" cols="50" rows="10" ></input>
  </div>
  <div class="form-group soninpt">
    <label class="control-label" for="inputNormal">Mobileno</label>
    <input type="text" name="mobileno" id="mobileno" class="bp-suggestions form-control" cols="50" rows="10"></input>
</div>
<div class="form-group">
      <label class="control-label" for="inputNormal">Birthdate</label>
      <input type="date" name="birthdate" id="birthdate" class="bp-suggestions form-control" cols="50" rows="10" ></input>
  </div>
  <div class="form-group">
      <label class="control-label" for="inputNormal">Purpose</label>
      <input type="text" name="purpose" id="purpose" class="bp-suggestions form-control" cols="50" rows="10" ></input>
  </div>
  <!-- <input type="submit" name="btnins" id="btnins" value="Sign Up" class="girisbtn"  /> -->
  <button type="submit" name="btnins" id="btnins" value="Sign Up" class="girisbtn">
  Sign Up
  </button>
</form>
<button id="moveright">Login</button>
</div>
</div>

<div class="right">
  <div id="ic">
    <h2>Login</h2>
    <?php
if(isset($_POST['btnlogin']))
{
    $uname=$_POST['uname'];
    $password=$_POST['password'];
    $q=mysqli_query($con,"select * from user_master where uname='$uname' and password='$password'");
    $row=mysqli_fetch_array($q);
    $_SESSION['uid']=$row['uid'];
    $_SESSION['loggedin']=true;
    $cnt=mysqli_num_rows($q);
    if($cnt>0)
   
		header('location:index.php');
    else
        echo "<script>alert('login denied')</script>";

}
?>
    
   
   
 <form name="login-form" id="girisyap" id="sidebar-user-login" method="post">
     <div class="form-group">
        <label class="control-label" for="inputNormal">Username</label>
        <input type="text" name="uname" class="bp-suggestions form-control" cols="50" rows="10" ></input>
      </div>
    <div class="form-group soninpt">
      <label class="control-label" for="inputNormal">Password</label>
      <input type="password" name="password" class="bp-suggestions form-control" cols="50" rows="10"></input>
  </div>
  
											<div>
												<a href="forgotpassword.php">
													<i class="ace-icon fa fa-arrow-left"></i>
													I forgot my password
												</a>
											</div>
  <button type="submit" name="btnlogin" value="login" class="girisbtn" tabindex="100">
  Login
  </button>
  </form>

<button id="moveleft"ntype="submit">Sign Up</button>

</div>
</div>
</div>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/mi.js"></script>

<script>

$('.form-control').on('focus blur', function (e) {
    $(this).parents('.form-group').toggleClass('focused', (e.type === 'focus' || this.value.length > 0));
}).trigger('blur');

$('#moveleft').click(function() {
  $('#textbox').animate({
    'marginLeft': "0" //moves left
  });

  $('.toplam').animate({
    'marginLeft': "100%" //moves right
  });
});

$('#moveright').click(function() {
  $('#textbox').animate({
    'marginLeft': "50%" //moves right
  });

  $('.toplam').animate({
    'marginLeft': "0" //moves right
  });
});

</script>


</body>
</html>