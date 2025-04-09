<?php
  include ('hhh.php');
  include ('connect.php');
?>
        <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area">
            <div class="" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Contact Us</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ol>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->
        
        <!--================Contact Area =================-->
        <?php

       $q=mysqli_query($con,"select * from contactus");  
       
       while($row=mysqli_fetch_array($q))
       {     
        ?>

        <section class="contact_area section_gap">
            <div class="container">
                <div id="mapBox" class="mapBox" 
                    data-lat="40.701083" 
                    data-lon="-74.1522848" 
                    data-zoom="13" 
                    data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."
                    data-mlat="40.701083"
                    data-mlon="-74.1522848">
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <h6><?php echo $row[4];?></h6>
                                <p></p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                <h6><a href="#"><?php echo $row[3];?></a></h6>
                                <p></p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <h6><a href="#"><?php echo $row[2];?></a></h6>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <?php
       }
       ?>
       </section>


<section class="contact_area section_gap">
<?php
  if(isset($_POST['btnins']))
  {
      $name=$_POST['txtname'];
      $email=$_POST['txtemail'];
	  $message=$_POST['txtmessage'];
      $status=$_POST['status'];
      $q=mysqli_query($con,"insert into user_query values('','$name','$email','$message','0')");
      if($q)
      {
              echo "<script>alert('Inserted');</script>";
      }
      else
      {
          echo "<script>alert('Not Inserted');</script>";
      }
  
  
  }
  ?>


                    <div class="col-md-9">
                        <form class="row contact_form" role="form" method="post" id="contactForm" novalidate="novalidate">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="txtname" placeholder="Enter your name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="txtemail" placeholder="Enter email address">
                                </div>
                               
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="txtmessage" id="message" rows="1" placeholder="Enter Message"></textarea>
                                </div>
                            </div>

                            <div class="col-md-12 text-right">
                                <button type="submit" value="submit" class="btn theme_btn button_hover" name="btnins">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--================Contact Area =================-->
        
       
       
       
       <!--================Contact Success and Error message Area =================-->
        <div id="success" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Thank you</h2>
                        <p>Your message is successfully sent...</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modals error -->

        <div id="error" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Sorry !</h2>
                        <p> Something went wrong </p>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Contact Success and Error message Area =================-->
        
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>
       
<?php
  include ('fff.php');
  
?>
