<?php
include('hhh.php');
include('connect.php'); // Include database connection

// Initialize variables
$bid = $toEmail = "";

// Check if Booking ID (bid) is submitted
if (isset($_POST['fetchEmail'])) {
    $bid = $_POST['bid'];

    // Fetch customer email based on bid
    $query = "SELECT email FROM booking WHERE bid = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("i", $bid);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($row = $result->fetch_assoc()) {
        $toEmail = $row['email'];
    } else {
        echo "<script>alert('Invalid Booking ID! No email found.');</script>";
    }
    
    $stmt->close();
}
?>

<!--  Page Header -->
<div class="content-wrapper">
    <h1><b> BOOKING ANSWER QUERY </b></h1>
</div>
<br>

<!-- Form to fetch email -->
<form method="post" class="forms-sample">
    <div class="form-label-group">
        <label for="bid">Booking ID <span style="color: #FF0000">*</span></label>
        <input type="number" name="bid" id="bid" class="form-control" placeholder="Enter Booking ID" required>
    </div>
    <br/>
    <button type="submit" name="fetchEmail" class="btn btn-lg btn-secondary btn-block">Fetch Email</button>
</form>
<br>

<!-- Email Sending Form -->
<form action="email-script.php" method="post" class="forms-sample">
    <div class="form-label-group">
        <label for="toEmail">To (Customer Email) <span style="color: #FF0000">*</span></label>
        <input type="email" name="toEmail" id="toEmail" class="form-control" value="<?php echo htmlspecialchars($toEmail); ?>" readonly required>
    </div> 
    <br/>
    
    <label for="subject">Subject <span style="color: #FF0000">*</span></label>
    <div class="form-label-group">
        <input type="text" id="subject" name="subject" class="form-control" placeholder="Enter subject" required>
    </div>
    <br/>
    
    <label for="message">Message <span style="color: #FF0000">*</span></label>
    <div class="form-label-group">
        <textarea id="message" name="message" class="form-control" placeholder="Enter your response" required></textarea>
    </div> 
    <br/>
    
    <button type="submit" name="sendMailBtn" class="btn btn-lg btn-primary btn-block text-uppercase">Send Email</button>
</form>

<?php
include('fff.php');
?>
