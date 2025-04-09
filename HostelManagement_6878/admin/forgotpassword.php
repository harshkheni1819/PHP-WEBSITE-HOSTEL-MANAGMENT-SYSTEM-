<!doctype html>
<html lang="en">
<head>
	<title>Aashray Stay Admin Log IN</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body class="img js-fullheight" style="background-image: url(images/car.jpg);">

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\wamp64\www\HostelManagement_67\user\PHPMailer-master\src\Exception.php';
require "C:\wamp64\www\HostelManagement_67\user\PHPMailer-master\src\PHPMailer.php";
require 'C:\wamp64\www\HostelManagement_67\user\PHPMailer-master\src\SMTP.php';


if(isset($_POST['submit'])) {
    session_start();
    
    // Connect to the database
    $con = mysqli_connect("localhost", "root", "", "hostelmanagement_67");
    if(!$con) {
        die("Connection error: " . mysqli_connect_error());
    }
    
    $email = $_POST['email'];
    
    // Query the database for the email
    $q = mysqli_query($con, "SELECT * FROM user_master WHERE email='$email'");
    $cnt = mysqli_num_rows($q);
    
    // Generate OTP and store in session
    $otp = rand(999, 9999);
    $_SESSION['otp'] = $otp;
    
    $to = $email;
    
    if ($cnt > 0) {
        $mail = new PHPMailer(true);
        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Gmail SMTP server
            $mail->SMTPAuth = true;
            $mail->Username = 'hittu.n.kheni2382@gmail.com'; // Your Gmail
            $mail->Password = 'jlci ztbh mdpg esje'; // App password (not your actual Gmail password)
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;
    
            // Recipients
            $mail->setFrom('hittu.n.kheni2382@gmail.com', 'Aashray Stay');
            $mail->addAddress($to);
    
            // Content
            $mail->isHTML(false);
            $mail->Subject = 'RECOVERY OTP MAIL';
            $mail->Body    = "Hello!!\n\nWe got a request to reset your Aashray Stay password. \nRecovery OTP for your account is $otp\n\nIf you ignore this message, your password will not be changed. If you didn't request a password reset, let us know.\n\nRegards,\nTeam Aashray Stay";
    
            $mail->send();
            echo "<script>alert('OTP Sent Successfully!');</script>";
            echo "<script>window.location.assign('forgot_otp.php?email=$email')</script>";
        } catch (Exception $e) {
            echo "<script>alert('Mailer Error: " . $mail->ErrorInfo . "');</script>";
        }
    } else {
        echo "<script>alert('Your email id is not registered');</script>";
    }
}
?>

<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6 text-center mb-5">
				<h2 class="heading-section">RECOVER PASSWORD </h2>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-6 col-lg-4">
				<div class="login-wrap p-0">
					<h6 class="mb-20" style="margin-left: 24px; margin-bottom: 20px;">Drop Your Registered E-mail</h6>
					<form method="POST" enctype="multipart/form-data" class="signin-form">
						<div class="form-group">
							<input type="text" name="email" placeholder="Enter Registered Email" id="email" class="form-control" required>
						</div>
						<div class="text-center d-flex">
							<input type="submit" name="submit" class="form-control btn btn-primary submit px-3" value="Send OTP">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
