<?php
  include ('hhh.php');
  include ('connect.php');
  ?>
  <!--================Breadcrumb Area =================-->
<section class="breadcrumb_area">
            <div class="" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">MORE VIDEO</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.php">VIDEO</a></li>
                        <li class="active">MORE VIDEO</li>
                    </ol>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->
  <div>
  <form class="form-horizontal widget-box " role="form" method=post enctype="multipart/form-data">
  <div class="widget-body">
							 <div class="widget-main">
								 <h1 class="header blue lighter bigger">	<b> VEIW VIDEO</b> </h1>

								 <div class="space-6"></div>

</div>
<?php
$query=mysqli_query($con,"select * from video");

	while($all_video=mysqli_fetch_array($query))

	{
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" width:100px; href="assets/css/viewVideo.css" />

    </head>
	 
	 <video width="300" height="200" controls autoplay>
	<source src="../admin/test_upload/<?php echo $all_video['video_name']; ?>" type="video/mp4">
	</video> 
	
	<?php }  ?>


   


<?php
  include ('fff.php');
  
?>