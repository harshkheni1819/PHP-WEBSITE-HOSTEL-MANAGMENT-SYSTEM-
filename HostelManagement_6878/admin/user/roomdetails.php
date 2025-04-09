<?php
  include ('hhh.php');
  include ('connect.php');
?>
       <style>
          .text{
            font-size:15px;
            color:black;
          }
         </style>
          <!--================Breadcrumb Area =================-->
          <section class="breadcrumb_area">
            <div class="" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Room details</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Room master</a></li>
                        <li class="active">Room details</li>
                    </ol>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->
	
		
			<!-- Start Align Area -->
      <div class="whole-wrap">
				<div class="container">

      <?php
         $roomid=$_GET['x'];
       $q=mysqli_query($con,"select * from room_master where roomid=$roomid");  
       while($row=mysqli_fetch_array($q))
       {
        ?>
        <div class="section-top-border">
						<h3 class="mb-30 title_color"></h3>
        	<h3 class="mb-30 title_color"><?php echo $row[1];?></h3>
        <?php
       }
?>
		
    <?php
    
    $q=mysqli_query($con,"select * from room_details where roomid=$roomid");  
     while($row=mysqli_fetch_array($q))
    {
    
  ?>

					
						<div class="row">
							<div class="col-md-3">
                            <?php echo  " <img class='img-fluid' src='../admin/images/$row[photo]'>";?>
                           
							</div>
              <div>
              <h3 class="mb-30 title_color">Monthly price:<?php echo $row[3];?></h3>
              <p><?php echo $row[4];?></p>
          </div>
							<div class="col-md-9 mt-sm-20 left-align-p">
								<h2 class="title title_color"></h2>
              
                             <h3  class="text"><p><?php echo $row['description'];?></p></h3>
                            <div class="col-md-3">

                            <!-- <a class="book_now_btn button_hover" href="check_session.php?roomid=x">Book Now</a> -->
                           <?php
                             echo "<a href='check_session.php?x=$roomid' class='book_now_btn button_hover'>Book Now</a>";
                             ?>
          </div>
							</div>
						
                    <?php
                
          }
                    ?>
                  
                      </div>
					</div>
					</div>
            <p>
        </p>
			<!-- End Align Area -->
            
        <p>
        </p>
		                
            <?php
  include ('fff.php');
  
?>


