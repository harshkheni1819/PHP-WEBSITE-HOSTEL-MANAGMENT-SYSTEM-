<?php
ob_start(); // Ensure no output is sent before PDF
error_reporting(0); 
ini_set('display_errors', 0);
require('connect.php'); 
require_once('<TCPDF-main/tcpdf.php'); 



    // Fetch yearly sales data for Aashray Stay
    // Fetch yearly sales data for Aashray Stay (Counting rooms booked)
    $yearly_query = mysqli_query($con, "SELECT DATE_FORMAT(checkin, '%Y-%m') AS booking_month, COUNT(*) AS total_bookings FROM booking WHERE YEAR(checkin) = YEAR(CURDATE()) AND booking_status = 'Booked' GROUP BY booking_month");


$data = [];
$months = [];
$bookings = [];

while ($row = mysqli_fetch_assoc($yearly_query)) {
    $months[] = $row['booking_month'];
    $bookings[] = $row['total_bookings'];
    $data[] = $row;
}


    // Handle PDF Download 
    // Handle PDF Download 
    if (isset($_GET['download'])) {
        ob_start(); // Start output buffering
        error_reporting(0); // Suppress errors
        
        $pdf = new TCPDF();
        $pdf->AddPage();
        $pdf->SetFont('Helvetica', '', 12);
        
        // Add Logo
        $pdf->Image('images/l.jpg', 10, 10, 30); // Ensure image exists
    
        // Aashray Stay Details
        $pdf->Cell(0, 10, "Aashray Stay - Monthly Booking Report", 0, 1, 'C');
        $pdf->Cell(130, 10, "", 0, 0);
        $pdf->Cell(0, 10, "Location: Aashray Stay, Vesu, Surat", 0, 1, 'R');
        $pdf->Cell(130, 10, "", 0, 0);
        $pdf->Cell(0, 10, "Contact: +91 8980025341", 0, 1, 'R');
    
        // Table Headers
        $pdf->SetFillColor(200, 200, 200);
        $pdf->Cell(50, 10, "Month", 1, 0, 'C', true);
        $pdf->Cell(50, 10, "Rooms Booked", 1, 1, 'C', true);
        
        // Table Data
        foreach ($data as $row) {
            $pdf->Cell(50, 10, $row['booking_month'], 1);
            $pdf->Cell(50, 10, $row['total_bookings'], 1);
            $pdf->Ln();
        }
    
        ob_end_clean(); // Clear buffer before outputting PDF
        $pdf->Output("Aashray_Stay_Monthly_Booking_Report.pdf", 'D');
        exit;
    }
    

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aashray Stay - Monthly Report</title>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <style>
            body {
                font-family: Arial, sans-serif;
                text-align: center;
                background-color: #f4f4f4;
                margin: 0;
                padding: 20px;
            }
            .container {
                width: 60%;
                margin: auto;
                background: #fff;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            }
            .chart-container {
                width: 400px;
                height: 300px;
                margin: auto;
            }
            .btn-download {
                background-color: #007bff;
                color: white;
                padding: 10px 20px;
                text-decoration: none;
                border-radius: 5px;
                display: inline-block;
                margin-top: 15px;
            }
            .btn-download:hover {
                background-color: #0056b3;
            }
        </style>
    </head>
    <body>

        <div class="container">
            <h2>Aashray Stay - Monthly Room Sales Report</h2>
            
            <!-- Chart Box -->
            <div class="chart-container">
                <canvas id="salesChart"></canvas>
            </div>

            <!-- PDF Download Button -->
            <a href="yearly_report.php?download=true" class="btn-download">Download PDF</a>
        </div>

        <script>
    var ctx = document.getElementById('salesChart').getContext('2d');
    var salesChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($months); ?>,
            datasets: [{
                label: 'Rooms Booked',
                data: <?php echo json_encode($bookings); ?>,
                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: false,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>


    </body>
    </html>