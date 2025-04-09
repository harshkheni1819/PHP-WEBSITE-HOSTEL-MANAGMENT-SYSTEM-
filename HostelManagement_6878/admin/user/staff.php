<?php
  include ('hhh.php');
  include ('connect.php');
?>
  <!--================Breadcrumb Area =================-->
  
  <section class="breadcrumb_area">
            <div class="" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Staff</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Staff</li>
                    </ol>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->

         <!--================ Facilities Area  =================-->
         <section class="facilities_area section_gap">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">  
            </div>
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_w">Staff</h2>

                </div>
                <div class="row mb_30">
                <?php
       $q=mysqli_query($con,"select * from staff_master");  
       while($row=mysqli_fetch_array($q))
       {
?>
                     <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                        <?php echo  " <img class='img-fluid' src='../admin/images/$row[photo]'>";?> 
                        <?php
                             echo "<a href='staffdetails.php?x=$row[0]' class='sec_h4'>$row[1]</a>";
                             ?>
                           

                        </div>
                    </div>
                    <?php
       }
       ?>
                </div>
            </div>
        </section>
        <!--================ Facilities Area  =================-->
       
        <?php
  include ('fff.php');
  
?>