<?php
  include ('hhh.php');
  include ('connect.php');
?>
        
        <!--================Banner Area =================-->
        <section class="" style="background-image: url(image/index.jpg);">
            <div class="booking_table d_flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h6>Away from Aashray Stay life</h6>
						<h2>Relax Your Mind</h2>
						<p>If you are looking at blank cassettes on the web, you may be very confused at the<br> difference in price. You may see some for as low as $.17 each.</p>
						<a href="#" class="btn theme_btn button_hover"></a>
					</div>
				</div>
            </div>
        </section>
        <!--================Banner Area =================-->
        
        <!--================ Accomodation Area  =================-->
        <section class="accomodation_area section_gap">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color">Special Room</h2>
                    <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast,</p>
                </div>
               
                <div class="row mb_30">
                   
                    <?php
       $q=mysqli_query($con,"select * from room_master");  
       while($row=mysqli_fetch_array($q))
       {
        ?>
         <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                            
                            <?php echo  " <img class='img-fluid' src='../admin/images/$row[photo]'>";?> 
                           
                             <?php
                             echo "<a href='roomdetails.php?x=$row[0]' class='btn theme_btn button_hover'>View</a>";
                             ?>
                            </div>
                            <a href="#"><h4 class="sec_h4"><?php echo $row[1];?></h4></a>
                            
                        </div>
                    </div>
                    <?php
                    $pic=$row[2];
          }
                    ?>
                </div>
            </div>
        </section>
        <!--================ Accomodation Area  =================-->
         
        <!--================ Facilities Area  =================-->

        <section class="facilities_area section_gap">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">  
            </div>
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_w">Royal Facilities</h2>
                    
                </div>
                
                <div class="row mb_30">
                <?php
                    $q=mysqli_query($con,"select * from facility_master"); 
                    while($row=mysqli_fetch_array($q))
                    {

                ?>
                    <div class="col-lg-4 col-md-6">
                        <div>
                        <div class="facilities_item">
                            <h4 class="sec_h4"><?php echo $row[1];?></h4>
                            <p><?php echo $row[2];?></p>
                        </div>

                        </div>
                    </div>
                    <?php
                }
            ?>
                </div>
            </div>
            

            
        </section>
        <!--================ Facilities Area  =================-->
        <P>
            </P>
         <!--================ video Area  =================-->
        <video autoplay muted loop id="myVideo" style="position:static;
    height: 40;
    width:100%;
    min-height: 100px;
    background: linear-gradient(rgba(15, 23, 43, .1), rgba(15, 23, 43, .1));
    background-position: center center;
    background-repeat: no-repeat;
     background-size: cover;

">
                    <source src="image/hostelvideo.mp4" type="video/mp4">

                </video>
                <?php
                             echo "<a href='viewvideo.php' class='btn theme_btn button_hover'> View more videos</a>";
                             
                             ?>
                               <div class="cover">
                           
                           </div>
         <!--================ video Area  =================-->
        
        <!--================ About History Area  =================-->
        <!-- section class="about_history_area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d_flex align-items-center">
                        <div class="about_content ">
                            <h2 class="title title_color">About Us <br>Our History<br>Mission & Vision</h2>
                            <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed.</p>
                            <a href="#" class="button_hover theme_btn_two">Request Custom Price</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid" src="image/about_bg.jpg" alt="img">
                    </div>
                </div>
            </div>
        </section-->
        <!--================ About History Area  =================-->
        
        <p>
            </p>
      
        
        <!--================ start footer Area  =================-->	
        <?php
  include ('fff.php');
  
?>    