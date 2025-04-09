<?php
include('hhh.php');
include('connect.php');
?>
<link rel="stylesheet" type="text/css" href="user\css\faq.css">

<!--================Breadcrumb Area =================-->
<section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="about_banner.jpg" style="top: 500;"></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">FAQ</h2>
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">FAQ</li>
            </ol>
        </div>
    </div>
</section>
<!--================Breadcrumb Area =================-->

<body>

<div class="faq_area section_padding_130" id="faq">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-lg-6">
                <!-- Section Heading-->
                <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s">
                    <h3><span>Frequently </span> Asked Questions</h3>
                    <div class="line"></div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <!-- FAQ Area-->
            <div class="col-12 col-sm-10 col-lg-8">
                <div class="accordion faq-accordian" id="faqAccordion">
                    <?php
                    $q = mysqli_query($con, "SELECT * FROM faq");
                    $count = 1;
                    while ($row = mysqli_fetch_array($q)) {
                        $faq_id = "collapse" . $count; // Unique ID for each FAQ
                        ?>
                        <div class="card border-0 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="card-header" id="heading<?php echo $count; ?>">
                                <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#<?php echo $faq_id; ?>" aria-expanded="false" aria-controls="<?php echo $faq_id; ?>">
                                    <?php echo $row[1]; ?> <span class="lni-chevron-down"></span>
                                </h6>
                            </div>
                            <div class="collapse" id="<?php echo $faq_id; ?>" aria-labelledby="heading<?php echo $count; ?>" data-parent="#faqAccordion">
                                <div class="card-body">
                                    <p><?php echo $row[2]; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php
                        $count++;
                    }
                    ?>
                </div>

                <!-- Support Button -->
                <div class="support-button text-center d-flex align-items-center justify-content-center mt-4 wow fadeInUp" data-wow-delay="0.5s">
                    <i class="lni-emoji-sad"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

<?php
include('fff.php');
?>
