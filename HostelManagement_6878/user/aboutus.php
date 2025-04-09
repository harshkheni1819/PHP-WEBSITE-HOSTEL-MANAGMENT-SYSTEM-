<?php
  include ('hhh.php');
  include ('connect.php');
?>


        
        <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="about_banner.jpg"style="top: 500;"></div>
            <!--div class="" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div-->
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">About Us</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">About</li>
                    </ol>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->
        
       <!--================ About History Area  =================-->
       <?php
          $q=mysqli_query($con,"select * from aboutus");  
           while($row=mysqli_fetch_array($q))
          {
          
        ?>
        <section class="about_history_area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d_flex align-items-center">
                        <div class="about_content ">
                            <h2 class="title title_color"><?php echo $row[1];?></h2>
                            <p><?php echo $row[2];?></p>
                            
                            
                        </div>
                    </div>
              
                    <div class="col-lg-6">
                    <?php echo  " <img class='img-fluid' src='../admin/images/$row[photo]'>";?> 
                    </div>
                </div>
            </div>
            <?php
                    $pic=$row[3];
          }
                    ?>
        </section>
        <!--================ About History Area  =================-->
        
       
        <?php
  include ('fff.php');
  
?>
