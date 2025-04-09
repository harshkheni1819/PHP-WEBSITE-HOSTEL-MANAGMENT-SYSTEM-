<?php
include ('hhh.php');
include ('connect.php');
?>
<div class="custom-section text-center my-4 p-4">
        <h2 class="text-dark">🏨 Welcome to the Aashray Stay's Dashboard</h2>
        <p class="text-muted">Keep track of rooms, bookings, and facilities all in one place.</p>
</div>
<div class="container mt-4">
    <!-- Admin Boxes (Above the New Section) -->
    <div class="d-flex flex-wrap justify-content-start custom-sh">
        <?php
        // Dashboard Items
        $items = [
            ["query" => "SELECT * FROM room_master", "color" => "primary", "icon" => "fa-bed", "label" => "Rooms"],
            ["query" => "SELECT * FROM staff_master", "color" => "warning", "icon" => "fa-users", "label" => "Staff"],
            ["query" => "SELECT * FROM event", "color" => "danger", "icon" => "fa-calendar", "label" => "Event"],
            ["query" => "SELECT * FROM gallery_master", "color" => "success", "icon" => "fa-picture-o", "label" => "Gallery"],
            ["query" => "SELECT * FROM admin_registration", "color" => "info", "icon" => "fa-user", "label" => "Admin"],
			["query" => "SELECT * FROM facility_master", "color" => "primary", "icon" => "fa-wrench", "label" => "Facility"],
            ["query" => "SELECT * FROM booking WHERE booking_status = 'Booked'", "color" => "warning", "icon" => "fa-book", "label" => "Approved Bookings"]
        ];

        foreach ($items as $item) {
            $q = mysqli_query($con, $item["query"]);
            $cnt = mysqli_num_rows($q);
            echo "
                <div class='col-lg-3 col-md-4 col-sm-6 mb-3 d-flex justify-content-center'>
                    <div class='panel panel-{$item["color"]} card-hover text-center' style='width: 220px;'>
                        <div class='panel-heading'>
                            <i class='fa {$item["icon"]} fa-2x'></i>
                        </div>
                        <div class='panel-body'>
                            <h4 class='text-{$item["color"]}'>$cnt</h4>
                            <p class='text-muted' style='font-size: 14px;'>{$item["label"]}</p>
                        </div>
                    </div>
                </div>";
        }
        ?>
    </div>

    <!-- New Section: Announcements / Summary -->
    
        <div class="row justify-content-start custom-shift" id="ban">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4">
                <div class="summary-box">
                    <i class="fa fa-star fa-3x text-warning"></i>
                    <h4>Room Details</h4>
                    
                </div>
            </div>
            <div class="col-md-4">
                
            </div>
        </div>
    </div>
	<br>

    <!-- Room Category Boxes -->
    <div class="row justify-content-center">
        <?php
        // Fetch all room categories from room_master
        $room_query = mysqli_query($con, "SELECT roomid, roomtype FROM room_master");

        while ($room = mysqli_fetch_assoc($room_query)) {
            $roomid = $room["roomid"];
            $roomtype = $room["roomtype"];
            $total_rooms = 10; // Fixed availability per category

            
            $booking_query = mysqli_query($con, "SELECT COUNT(*) as count FROM booking WHERE roomid = '$roomid' AND booking_status = 'Booked'");
            $booking_data = mysqli_fetch_assoc($booking_query);
            $booked_count = $booking_data['count'];

            
            $booking_percentage = ($booked_count / $total_rooms) * 100;
            $booking_percentage = min($booking_percentage, 100);

            echo "
                <div class='col-lg-4 col-md-6 col-sm-12 mb-3 d-flex justify-content-center'>
                    <div class='panel panel-info card-hover text-center' style='width: 280px;'>
                        <div class='panel-heading'>
                            <i class='fa fa-bed fa-2x'></i>
                        </div>
                        <div class='panel-body'>
                            <h5 class='text-info'>$booked_count / $total_rooms Booked</h5>
                            <div class='progress' style='height: 10px;'>
                                <div class='progress-bar bg-info' role='progressbar' style='width: {$booking_percentage}%;' aria-valuenow='{$booking_percentage}' aria-valuemin='0' aria-valuemax='100'></div>
                            </div>
                            <p class='text-muted mt-2' style='font-size: 16px; font-weight: bold;'>$roomtype</p>
                        </div>
                    </div>
                </div>";
        }
        ?>
    </div>
</div>

<!-- in code CSS -->
<style>
    .panel {
        width: 300px;  
        padding: 20px;
        text-align: center;
        background: #f8f9fa;
        border-radius: 10px;
        box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.1);
    }

    .card-hover:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .progress {
        border-radius: 5px;
        overflow: hidden;
    }

    .custom-section {
        background: #eef2f7;
        border-radius: 10px;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
		
    }

    .summary-box {
        padding: 20px;
        background: white;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
		text-align:center;
    }

    .room-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
		
		
    }
	.custom-shift {
    margin-left: -30%;
}
	.custom-sh {
    margin-left: -15%;
	padding:20px;
	
}
	
</style>

<?php include ('fff.php'); ?>
