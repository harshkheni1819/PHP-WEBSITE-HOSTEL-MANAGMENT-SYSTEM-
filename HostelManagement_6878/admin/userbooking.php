<?php
include('hhh.php');
include('connect.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'C:/wamp64/www/HostelManagement_67/user/PHPMailer-master/src/Exception.php';
require 'C:/wamp64/www/HostelManagement_67/user/PHPMailer-master/src/PHPMailer.php';
require 'C:/wamp64/www/HostelManagement_67/user/PHPMailer-master/src/SMTP.php';

// Define max rooms per type
$max_rooms_per_type = 10;

// Get room booking counts
$room_counts = [];
$booking_count_query = mysqli_query($con, "SELECT roomname, COUNT(*) as count FROM booking WHERE booking_status = 'Booked' GROUP BY roomname");
while ($row = mysqli_fetch_assoc($booking_count_query)) {
    $room_counts[$row['roomname']] = $row['count'];
}
function sendMail($email, $roomname)
{
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'hittu.n.kheni2382@gmail.com';
    $mail->Password = 'jlci ztbh mdpg esje';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('hittu.n.kheni2382@gmail.com', 'Aashary Stay');
    $mail->addAddress($email);
    $mail->Subject = 'Room Unavailable - Please Choose Another';
    $mail->Body = "Dear Customer,\n\nThe room type ($roomname) you selected is fully booked. Please select a different room.\n\nThank you!";
    
    if (!$mail->send()) {
        error_log('Mailer Error: ' . $mail->ErrorInfo);
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['send_mail'])) {
    $email = $_POST['email'];
    $roomname = $_POST['roomname'];

    if (!empty($email) && !empty($roomname)) {
        sendMail($email, $roomname);
        echo "<script>alert('Email notification sent successfully.');</script>";
    } else {
        echo "<script>alert('Error: Missing email or room name.');</script>";
    }
}
?>




<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">User Booking</h4>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th> # </th>
                            <th> Name </th>
                            <th> Address </th>
                            <th> Date </th>
                            <th> Dob </th>
                            <th> Checkin </th>
                            <th> Checkout </th>
                            <th> Email </th>
                            <th> Phoneno </th>
                            <th> Roomname </th>
                            <th> Booking Status </th>
                            <th> Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        $q = mysqli_query($con, "SELECT * FROM booking");
                        while ($row = mysqli_fetch_array($q)) {
                            $roomname = $row['roomname'];
                            $current_booked = isset($room_counts[$roomname]) ? $room_counts[$roomname] : 0;
                            $is_full = $current_booked >= $max_rooms_per_type;
                            
                            echo "<tr>";
                            echo "<td>" . $i . "</td>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td>" . $row['address'] . "</td>";
                            echo "<td>" . $row['date'] . "</td>";
                            echo "<td>" . $row['dob'] . "</td>";
                            echo "<td>" . $row['checkin'] . "</td>";
                            echo "<td>" . $row['checkout'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['phoneno'] . "</td>";
                            echo "<td>" . $roomname . " ({$current_booked}/{$max_rooms_per_type})</td>";
                            
                            echo "<td><strong>" . $row['booking_status'] . "</strong></td>";
                            echo "<td>";

                            // Disable "Booked" button if the room limit is reached
                            if ($row['booking_status'] == 'Booked') {
                                echo "<a href='update_booking_status.php?id={$row['bid']}&status=Unbooked' class='btn btn-danger'>Unbooked</a>";
                            } else {
                                if ($is_full) {
                                    ?>
                                    <form method="post">
                                        <input type="hidden" name="email" value="<?= htmlspecialchars($row['email']) ?>">
                                        <input type="hidden" name="roomname" value="<?= htmlspecialchars($roomname) ?>">
                                        <button type="submit" name="send_mail" class="btn btn-warning">Full</button>
                                    </form>
                                <?php
                                } else {
                                    echo "<a href='update_booking_status.php?id={$row['bid']}&status=Booked' class='btn btn-success'>Booked</a>";
                                }
                            }
                            ?>
                            
                            <?php
                            echo "</td>";
                            echo "</tr>";
                            $i++;
                        }
                        ?>


                            
                        
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
include('fff.php');
?>