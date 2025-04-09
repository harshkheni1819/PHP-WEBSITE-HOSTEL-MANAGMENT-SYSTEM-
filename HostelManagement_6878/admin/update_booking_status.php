<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'C:\wamp64\www\HostelManagement_67\user\PHPMailer-master\src\Exception.php';
require 'C:\wamp64\www\HostelManagement_67\user\PHPMailer-master\src\PHPMailer.php';
require 'C:\wamp64\www\HostelManagement_67\user\PHPMailer-master\src\SMTP.php';

if (isset($_GET['id']) && isset($_GET['status'])) {
    include('connect.php');

    $booking_id = $_GET['id'];
    $status = $_GET['status'];

    // Get booking details
    $query = mysqli_query($con, "SELECT * FROM booking WHERE bid='$booking_id'");
    $booking = mysqli_fetch_assoc($query);

    if ($booking) {
        $email = $booking['email'];
        $name = $booking['name'];
        $roomname = $booking['roomname'];

        // Update booking status in database
        mysqli_query($con, "UPDATE booking SET booking_status='$status' WHERE bid='$booking_id'");

        // Send email to the customer
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'hittu.n.kheni2382@gmail.com';
            $mail->Password = 'jlci ztbh mdpg esje'; // Use App Password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;

            $mail->setFrom('hittu.n.kheni2382@gmail.com', 'Aashray Stay');
            $mail->addAddress($email);

            $mail->isHTML(true);
            if ($status == "Booked") {
                $mail->Subject = "Booking Confirmation - Aashray Stay";
                $mail->Body = "Dear $name,<br><br>Your booking for room <b>$roomname</b> has been confirmed.<br><br>Thank you for choosing Aashray Stay!";
            } else {
                $mail->Subject = "Booking Cancellation - Aashray Stay";
                $mail->Body = "Dear $name,<br><br>We regret to inform you that your booking for room <b>$roomname</b> has been canceled.<br><br>Please contact us for further assistance.";
            }

            $mail->send();
            echo "<script>alert('Booking status updated and email sent successfully!'); window.location.href='userbooking.php';</script>";
        } catch (Exception $e) {
            echo "<script>alert('Booking updated but email failed: " . $mail->ErrorInfo . "'); window.location.href='userbooking.php';</script>";
        }
    }
} else {
    echo "<script>alert('Invalid request!'); window.location.href='userbooking.php';</script>";
}
?>