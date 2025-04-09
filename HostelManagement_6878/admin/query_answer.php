<?php
include('hhh.php');
include('connect.php'); // Include database connection

// Initialize variables
$uqid = $toEmail = "";

// Check if Query ID is provided in the URL
if (isset($_GET['uqid'])) {
    $uqid = $_GET['uqid'];

    // Fetch user email based on uqid
    $query = "SELECT email FROM user_query WHERE uqid = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("i", $uqid);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($row = $result->fetch_assoc()) {
        $toEmail = $row['email'];
    } else {
        echo "<script>alert('Invalid Query ID! No email found.');</script>";
    }
    
    $stmt->close();
}
?>

<!--  Page Header -->
<div class="content-wrapper">
    <h1><b> USER QUERY RESPONSE </b></h1>
</div>
<br>

<!-- Email Sending Form -->
<form action="email-script.php" method="post" class="forms-sample">
    <input type="hidden" name="uqid" value="<?php echo htmlspecialchars($uqid); ?>">
    
    <div class="form-label-group">
        <label for="toEmail">To (User Email) <span style="color: #FF0000">*</span></label>
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
