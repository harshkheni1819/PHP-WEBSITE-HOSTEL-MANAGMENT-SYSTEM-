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
                    <h2 class="page-cover-tittle">Gallery</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Gallery</li>
                    </ol>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->
        
        <section class="accomodation_area section_gap">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color">Gallery</h2>
                    <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast,</p>
                </div>
               
                <div class="row mb_60">
                   
                <?php
          $q=mysqli_query($con,"select * from gallery_master");  
       while($row=mysqli_fetch_array($q))
       {
    ?>
         <div class="col-lg-6 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                            
                            <?php echo  " <img class='img-fluid' src='../admin/images/$row[photo]'>";?> 
                           
                             <?php
                             echo "<a href='moreimage.php?x=$row[0]' class='btn theme_btn button_hover'> $row[1]</a>";
                             ?>
                            </div>
                            
                            
                        </div>
                    </div>
                    <?php
                  
          }
                    ?>
                </div>
            </div>
        </section>

<?php
include('fff.php');
?>





