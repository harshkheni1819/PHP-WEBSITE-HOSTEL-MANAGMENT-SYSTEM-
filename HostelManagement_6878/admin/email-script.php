<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:/wamp64/www/HostelManagement_67/user/PHPMailer-master/src/Exception.php';
require 'C:/wamp64/www/HostelManagement_67/user/PHPMailer-master/src/PHPMailer.php';
require 'C:/wamp64/www/HostelManagement_67/user/PHPMailer-master/src/SMTP.php';
require 'C:/wamp64/www/HostelManagement_67/user/connect.php'; // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fromEmail = "hittu.n.kheni2382@gmail.com"; // Admin's email
    $toEmail = trim($_POST['toEmail']); // Recipient's email
    $subject = trim($_POST['subject']); // Email subject
    $message = nl2br(htmlspecialchars($_POST['message'])); // Email body
    $uqid = intval($_POST['uqid']); // Query ID

    // Validate email
    if (!filter_var($toEmail, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid recipient email! Please check and try again.'); window.history.back();</script>";
        exit();
    }

    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Gmail SMTP Server
        $mail->SMTPAuth = true;
        $mail->Username = 'hittu.n.kheni2382@gmail.com'; // Your Gmail email
        $mail->Password = 'jlci ztbh mdpg esje'; // **Use an App Password, NOT your actual password**
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Sender & Recipient
        $mail->setFrom($fromEmail, 'Admin - AashrayStay');
        $mail->addAddress($toEmail);

        // Email Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = "
            <p>Hello,</p>
            <p>Your query has been answered:</p>
            <p><b>Query:</b> $subject</p>
            <p><b>Answer:</b> $message</p>
            <p>Thank you for reaching out to us.</p>
        ";

        // Send Email
        if ($mail->send()) {
            // Update query status in the database
            $updateQuery = "UPDATE user_query SET status = 1 WHERE uqid = ?";
            $stmt = $con->prepare($updateQuery);
            $stmt->bind_param("i", $uqid);
            if ($stmt->execute()) {
                echo "<script>alert('Email sent successfully, and query status updated!'); window.location.href='dashboard.php';</script>";
            } else {
                echo "<script>alert('Email sent, but failed to update status!'); window.location.href='dashboard.php';</script>";
            }
            $stmt->close();
        } else {
            echo "<script>alert('Email sending failed! Please try again.'); window.history.back();</script>";
        }
    } catch (Exception $e) {
        echo "<script>alert('Mailer Error: {$mail->ErrorInfo}'); window.history.back();</script>";
    }
}
?>
