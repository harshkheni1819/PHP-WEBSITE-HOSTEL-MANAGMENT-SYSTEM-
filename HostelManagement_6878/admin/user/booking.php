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
        
<link rel="stylesheet" href="booking/css/booking.css">
    </head>
    <script>
    function chk() {
        var a = document.getElementById('checkin').value;
        var b = document.getElementById('checkout').value;
     

        if (b < a)
            alert('You have selected invalid date!!');
    }
    function chk1()
    {
        var a = new Date(document.getElementById('checkin').value);
        //var d = document.getElementById('booking_date').value;
        var d = new Date().getTime();
       
        if(a < d)
            alert('date should be greater than todays date');
    }
</script>

    <body>


    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='' rel='stylesheet'>
                                <style>body {
    background-image: linear-gradient(to right, #121112, #121112)
}

.section {
    position: relative;
    height: 100vh;
}

.section .section-center {
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
}

#booking {
    font-family: 'Raleway', sans-serif;
}

.booking-form {
    position: relative;
    max-width: 642px;
    width: 100%;
    margin: auto;
    padding: 40px;
    overflow: hidden;
    background-image: url('https://i.imgur.com/8z1tx3u.jpg');
    background-size: cover;
    border-radius: 5px;
    z-index: 20;
}

.booking-form::before {
    content: '';
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    top: 0;
    background: rgba(0, 0, 0, 0.7);
    z-index: -1;
}

.booking-form .form-header {
    text-align: center;
    position: relative;
    margin-bottom: 30px;
}

.booking-form .form-header h1 {
    font-weight: 700;
    text-transform: capitalize;
    font-size: 42px;
    margin: 0px;
    color: #fff;
}

.booking-form .form-group {
    position: relative;
    margin-bottom: 30px;
}

.booking-form .form-control {
    background-color: rgba(255, 255, 255, 0.2);
    height: 60px;
    padding: 0px 25px;
    border: none;
    border-radius: 40px;
    color: #fff;
    -webkit-box-shadow: 0px 0px 0px 2px transparent;
    box-shadow: 0px 0px 0px 2px transparent;
    -webkit-transition: 0.2s;
    transition: 0.2s;
}

.booking-form .form-control::-webkit-input-placeholder {
    color: rgba(255, 255, 255, 0.5);
}

.booking-form .form-control:-ms-input-placeholder {
    color: rgba(255, 255, 255, 0.5);
}

.booking-form .form-control::placeholder {
    color: rgba(255, 255, 255, 0.5);
}

.booking-form .form-control:focus {
    -webkit-box-shadow: 0px 0px 0px 2px #ff8846;
    box-shadow: 0px 0px 0px 2px #ff8846;
}

.booking-form input[type="date"].form-control {
    padding-top: 16px;
}

.booking-form input[type="date"].form-control:invalid {
    color: rgba(255, 255, 255, 0.5);
}

.booking-form input[type="date"].form-control+.form-label {
    opacity: 1;
    top: 10px;
}

.booking-form select.form-control {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}

.booking-form select.form-control:invalid {
    color: rgba(255, 255, 255, 0.5);
}

.booking-form select.form-control+.select-arrow {
    position: absolute;
    right: 15px;
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    width: 32px;
    line-height: 32px;
    height: 32px;
    text-align: center;
    pointer-events: none;
    color: rgba(255, 255, 255, 0.5);
    font-size: 14px;
}

.booking-form select.form-control+.select-arrow:after {
    content: '\279C';
    display: block;
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
}

.booking-form select.form-control option {
    color: #000;
}

.booking-form .form-label {
    position: absolute;
    top: -10px;
    left: 25px;
    opacity: 0;
    color: #ff8846;
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1.3px;
    height: 15px;
    line-height: 15px;
    -webkit-transition: 0.2s all;
    transition: 0.2s all;
}

.booking-form .form-group.input-not-empty .form-control {
    padding-top: 16px;
}

.booking-form .form-group.input-not-empty .form-label {
    opacity: 1;
    top: 10px;
}

.booking-form .submit-btn {
    color: #fff;
    background-color: #e35e0a;
    font-weight: 700;
    height: 60px;
    padding: 10px 30px;
    width: 100%;
    border-radius: 40px;
    border: none;
    text-transform: uppercase;
    font-size: 16px;
    letter-spacing: 1.3px;
    -webkit-transition: 0.2s all;
    transition: 0.2s all;
}

.booking-form .submit-btn:hover,
.booking-form .submit-btn:focus {
    opacity: 0.9;
}</style>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
                                <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js'></script>
                                <script type='text/javascript'></script> 
                               
        
  <?php
if(isset($_POST['submit']))
{
    $roomid=$_GET['x'];
    $_SESSION['rm']=$roomid;
    
    $name=$_POST['name'];
    $address=$_POST['address'];
    $date=date('y/m/d');
    $dob=$_POST['dob'];
    $checkin=$_POST['checkin'];
    $checkout=$_POST['checkout'];
    
    
  $start_date = strtotime($checkin);
  $end_date = strtotime($checkout);
    $email=$_POST['email'];
    $phoneno=$_POST['phoneno'];
     $totalmonths= ($end_date - $start_date)/60/60/24/30;
    $_SESSION['totalmonths']=$totalmonths;
    $q=mysqli_query($con,"insert into booking values('','$roomid','$name','$address','$date','$dob','$checkin','$checkout','$email','$phoneno')");
    if($q)
    {
          
            echo "<script>alert('Inserted');</script>";
            echo "<script>window.location.assign('TxnTest.php')</script>";
    }
    else
    {
        echo "<script>alert('Not Inserted');</script>";
    }


}
?>

<form id="girisyap" name="booking_form" id="booking_form" method="post" enctype="multipart/form-data">
 <div id="booking" class="section">
    <div class="section-center">
        <div class="container">
            <div class="row">
                <div class="booking-form">
                    <div class="form-header">
                        <h1>Make your reservation</h1>
                    </div>
                    <form>
                    <div class="form-group">
                            <input class="form-control" type="text" name="name" placeholder="Name">
                            <span class="form-label">Name</span>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text"name="address" placeholder="Address(School,Collage,Job)">
                            <span class="form-label">Address</span>
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="date"name="dob" required>
                                    <span class="form-label">Date</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="date"name="dob" required>
                                    <span class="form-label">Date of Birth</span>
                                </div>
                            </div>
                     </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="date"name="checkin"id="checkin" onchange="chk1()" required>
                                    <span class="form-label">Check In</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="date"name="checkout"id="checkout" onchange="chk()" required>
                                    <span class="form-label">Check out</span>
                                </div>
                            </div>
                        </div>
         
                        <?php
    $roomid=$_GET['x'];
       $q=mysqli_query($con,"select * from room_master where roomid=$roomid");  
       while($row=mysqli_fetch_array($q))
       {
        ?>
      
                        <div class="form-group">
                            <input class="form-control" type="text" name="name" placeholder="Name" value="<?php echo $row[1];?>">
                            <span class="form-label"></span>
                        </div>
<?php
       }
?>
                        <div class="row">
                           
                           
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="email"name="email" placeholder="Enter your Email">
                                    <span class="form-label">Email</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="tel"name="phoneno" placeholder="Enter you Phone">
                                    <span class="form-label">Phone</span>
                                </div>
                            </div>
                        </div>
                       
                        <div class="form-btn">
                        
                        <input type=submit name=submit  class='submit-btn' value="Book Now">
                        
                           
                        </div>
                </div>
            </div>
        </div>
    </div>
</div> 
</form>

    </body>
</html>