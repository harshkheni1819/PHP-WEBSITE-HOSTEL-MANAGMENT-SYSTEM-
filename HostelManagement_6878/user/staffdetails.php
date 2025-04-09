<?php
include('hhh.php');
  include ('connect.php');
  ?>
<!--================Breadcrumb Area =================-->
  
<section class="breadcrumb_area">
<div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="about_banner.jpg"style="top: 500;"></div>
            <!--div class="" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div-->
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Staff Details</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Staff Master</a></li>
                        <li class="active">Staff Details</li>
                    </ol>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->

<!doctype html>
<html>

<head>

    <link rel="stylesheet" href="staffdetails/css/sd.css">
    
    
</head>

    <body>

        <section class="ftco-section bg-light">
    <div class="container">
    <h2 style="text-align: center;">Staff Details</h2>
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate fadeInUp ftco-animated">
               
            </div>
        </div>
        <div class="row">
       
 <?php
   $staffid=$_GET['x'];
$q=mysqli_query($con,"select * from staff_details where staffid=$staffid");
while($row=mysqli_fetch_array($q))
{
?>

            <div class="col-md-4 ftco-animate fadeInUp ftco-animated">
                <div class="block-7">
                    <div class="img" > <?php echo  " <img class='img-fluid' src='../admin/images/$row[photo]'>";?> </div>
                    <div class="text-center p-4">
                        <span class="excerpt d-block"><?php echo $row[2];?></span>
                        <span class="price"><sup></sup> <span class="number"></span> <sub></sub></span>
                        <ul class="pricing-text mb-5">
                            <li>Email : <?php echo $row[3];?></li>
                            <!-- <li><span class="fa fa-check mr-2"></span><?php echo $row[4];?></li> -->
                            <li>Joining Date : <?php echo $row[4];?></li>
                            <!-- <li><span class="fa fa-check mr-2"></span><?php echo $row[6];?></li> -->
                            <li>Sallary : <?php echo $row[5];?></li>
                            
                        </ul>

                    </div>
                </div>
            </div>
            <?php
}
?>
        </div>
    </div>
</section>
</body>
</html>

   

        <?php
  include ('fff.php');
  
?>