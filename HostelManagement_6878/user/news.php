<?php
  include ('hhh.php');
  include ('connect.php');
?>
   <!doctype html>
<html>

<head>

<https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css>		
<https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js>		
<https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css>		
	<https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js>
    <link rel="stylesheet" href="news/css/news.css">
    
</head>

    <body>    
          <!--================Breadcrumb Area =================-->
          <section class="breadcrumb_area">
          <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="about_banner.jpg"style="top: 500;"></div>
            <!--div class="" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div-->
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">News</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">News</li>
                    </ol>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->
         <!--================ Testimonial Area  =================-->
         <section class="testimonial_area section_gap">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color">Important news</h2>
                    <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from </p>
                </div>
                <div class="" style="text align ceneter">
                <?php
$q=mysqli_query($con,"select * from news");  
while($row=mysqli_fetch_array($q))
{
?>
  <div class="d-flex justify-content-center mt-5">
    <div class="card p-3 cookie"><span><?php echo $row[1];?><br></span>
        <div class="mt-4 text-right"><span class="mr-3 decline"></span><button class="btn btn-light btn-sm" type="button"><?php echo $row[2];?></button></div>
    </div>
</div>
<?php
}
?>
<p></p>
                 </div>
            </div>
        </section>

	<?php
  include('fff.php')
  ?>
  