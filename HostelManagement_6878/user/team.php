<?php
include('hhh.php');
  include ('connect.php');
  ?>

<!doctype html>
<html>

<head>

    <link rel="stylesheet" href="staffdetails/css/sd.css">
    <style>
        
        .block-7 .img img {
    width: 250px;  /* Adjust width */
    height: 119%; /* Adjust height */
    object-fit: cover; /* Ensures the image fits without distortion */
     /* Makes circular images (optional) */
    display: block;
    margin: auto; /* Centers the image inside the card */
}

.block-7 ul.pricing-text li {
    color: blue;
}






    </style>
    
    
</head>
 <!--================Breadcrumb Area =================-->
 <section class="breadcrumb_area">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="about_banner.jpg"style="top: 500;"></div>
            <!--div class="" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div-->
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle"> Our Team</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Team</li>
                    </ol>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->
    <body>

        <section class="ftco-section bg-light">
    <div class="container">
    <h2></h2>
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate fadeInUp ftco-animated">
               
            </div>
        </div>
        <div class="row">
       
 

            
            <div class="col-md-4 ftco-animate fadeInUp ftco-animated">
                <div class="block-7">
                    <div class="img" img class="img-fluid"><img src="image\hk.jpg"> </div>
                    <div class="text-center p-4">
                    </div>
                        <span class="excerpt d-block"></span>
                        <span class="price"><sup></sup> <span class="number"></span> <sub></sub></span>
                        <ul class="pricing-text mb-3" style="text-align:center; color:black; font-weight: bold;"> 
                        <li></li>
                             <li></li> 
                            Harsh Kheni
                             </ul>
                </div>
            </div>
            <div class="col-md-4 ftco-animate fadeInUp ftco-animated">
                <div class="block-7">
                    <div class="img" img class="img-fluid"><img src="image\sanjana.png"> </div>
                    <div class="text-center p-4">
                    </div>
                        <span class="excerpt d-block"></span>
                        <span class="price"><sup></sup> <span class="number"></span> <sub></sub></span>
                        <ul class="pricing-text mb-3" style="text-align:center; color:black; font-weight: bold;">
                        
                        <li></li>
                            <li ></li> 
                            Sanjana Lavri
                             </ul>
                    
                </div>
            </div>

            <div class="col-md-4 ftco-animate fadeInUp ftco-animated">
                <div class="block-7">
                    <div class="img" img class="img-fluid"><img src="image\tirth.png"> </div>
                    <div class="text-center p-4">
                    </div>
                        <span class="excerpt d-block"></span>
                        <span class="price"><sup></sup> <span class="number"></span> <sub></sub></span>
                        <ul class="pricing-text mb-3" style="text-align:center; color:black; font-weight: bold;">
                        
                        <li></li>
                            <li ></li> 
                            Tirth Dudhat
                             </ul>
                </div>    
            </div>
            
        
        </div>
    </div>
</section>
</body>
</html>

   

        <?php
  include ('fff.php');
  
?>