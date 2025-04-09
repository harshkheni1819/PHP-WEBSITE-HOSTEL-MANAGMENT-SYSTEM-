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

// Check if the email is provided
if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
    die('Error: Email is required.');
}

$userEmail = $_SESSION['email']; // Get user email from session

// Function to generate a random OTP
function generateOTP($length = 6) {
    return rand(100000, 999999);
}

$otp = generateOTP();
$_SESSION['otp'] = $otp; // Store OTP in session for verification

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'hittu.n.kheni2382@gmail.com';
    $mail->Password   = 'jlci ztbh mdpg esje'; // Use an app password instead of your Gmail password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Sender and recipient
    $mail->setFrom('hittu.n.kheni2382@gmail.com', 'Aashray Stay');
    $mail->addAddress($userEmail); // Send OTP to user's email

    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'Your Login OTP';
    $mail->Body    = "
        Dear User,<br><br>
        Your One-Time Password (OTP) for verification is <b>$otp</b>. Please enter this code within the next 10 minutes to complete the process.<br><br>
        If you did not request this, please ignore this email.<br><br>
        Best regards,<br>
        <b>Aashray Stay</b>
    ";
    $mail->AltBody = "Dear User,\n\nYour One-Time Password (OTP) for verification is: $otp. Please enter this code within the next 10 minutes to complete the process.\n\nIf you did not request this, please ignore this email.\n\nBest regards,\nAashray Stay";

    $mail->send();
    echo 'Your OTP has been sent successfully! Please check your registered email and enter the code to proceed.';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
