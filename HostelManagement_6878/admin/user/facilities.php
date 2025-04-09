<?php
include('hhh.php');
include ('connect.php');

?>
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

        <?php
include('fff.php');
?>