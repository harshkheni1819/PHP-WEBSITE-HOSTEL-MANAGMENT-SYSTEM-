<?php
// Import PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'C:\wamp64\www\HostelManagement_67\user\PHPMailer-master\src\Exception.php';
require 'C:\wamp64\www\HostelManagement_67\user\PHPMailer-master\src\PHPMailer.php';
require 'C:\wamp64\www\HostelManagement_67\user\PHPMailer-master\src\SMTP.php';

// Start session
session_start();

// Database connection
$con = mysqli_connect("localhost", "root", "", "hostelmanagement_67");

if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Check if email is set in session
if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
    die('Error: Email is required.');
}

$userEmail = $_SESSION['email']; // Get user email from session

// Check if OTP is already generated
if (!isset($_SESSION['otp_generated'])) {
    // Function to generate a random OTP
    function generateOTP($length = 6) {
        return rand(100000, 999999);
    }

    // Generate OTP and store in session + database
    $otp = generateOTP();
    $_SESSION['otp'] = $otp; // Store OTP in session
    $_SESSION['otp_generated'] = true; // Prevent OTP from regenerating

    $expiry_time = date("Y-m-d H:i:s", strtotime("+10 minutes"));
    $updateQuery = "UPDATE user_master SET otp='$otp', otp_expiry='$expiry_time' WHERE email='$userEmail'";
    mysqli_query($con, $updateQuery);

    // Send OTP via email using PHPMailer
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'hittu.n.kheni2382@gmail.com';
        $mail->Password   = 'jlci ztbh mdpg esje'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->setFrom('hittu.n.kheni2382@gmail.com', 'Aashray Stay');
        $mail->addAddress($userEmail);

        $mail->isHTML(true);
        $mail->Subject = 'Your OTP for Signup Verification';
        $mail->Body    = "Dear User,<br><br>Your One-Time Password (OTP) is <b>$otp</b>. Please enter this code within the next 10 minutes to verify your signup.<br><br>Best regards,<br><b>Aashray Stay</b>";
        $mail->AltBody = "Dear User,\n\nYour One-Time Password (OTP) is: $otp. Please enter this code within the next 10 minutes to verify your signup.\n\nBest regards,\nAashray Stay";

        $mail->send();
        echo "<script>alert('OTP has been sent to your email.');</script>";
    } catch (Exception $e) {
        echo "<script>alert('Failed to send OTP. Please try again later.');</script>";
    }
}

// Handle OTP Verification
if (isset($_POST['verify_email'])) {
    $enteredOtp = $_POST['otp'];

    // Fetch OTP from database
    $fetchQuery = "SELECT otp FROM user_master WHERE email='$userEmail'";
    $result = mysqli_query($con, $fetchQuery);
    $row = mysqli_fetch_assoc($result);
    $savedOTP = $row['otp'] ?? '';

    if ($enteredOtp == $savedOTP) {
        // OTP is correct, redirect to r.php
        $_SESSION['otp_verified'] = true; // Store verification status
        header("Location: r.php");
        exit();
    } else {
        echo "<script>alert('Incorrect OTP. Please try again.');</script>";
    }
}
?>

<!-- OTP Form -->
<body class="img js-fullheight" style="background-image: url(images/car.jpg);">
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">CHECK YOUR EMAIL FOR VERIFICATION CODE</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="login-wrap p-0">
                    <form method="POST" class="signin-form">
                        <div class="form-group">
                            <input type="text" name="otp" id="otp" class="form-control" placeholder="Verification Code" required />
                        </div>

                        <div class="form-group">
                            <button type="submit" name="verify_email" class="form-control btn btn-primary submit px-3">Submit</button>
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
