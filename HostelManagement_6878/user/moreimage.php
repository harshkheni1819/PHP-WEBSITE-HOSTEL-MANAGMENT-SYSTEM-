<?php
include('hhh.php');
  include ('connect.php');
  ?><!--================Breadcrumb Area =================-->
  <section class="breadcrumb_area">
  <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="about_banner.jpg"style="top: 500;"></div>
             <!--div class="" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div-->
             <div class="container">
                 <div class="page-cover text-center">
                     <h2 class="page-cover-tittle">More Image</h2>
                     <ol class="breadcrumb">
                         <li><a href="index.php">Gallery</a></li>
                         <li class="active">More Image</li>
                     </ol>
                 </div>
             </div>
         </section>
         <!--================Breadcrumb Area =================-->
         

<!doctype html>
<html>

<head>

    
    
</head>

    <body>

<!-- Page Content -->
<div class="container">

<h2 class="title_color"style="text align center">More Image</h2>
 
  <hr class="mt-2 mb-5">

  <div class="row text-center text-lg-start">

<?php
$gid=$_GET['x'];
$q=mysqli_query($con,"select * from gallery_details where gid=$gid");  

while($row=mysqli_fetch_array($q))
{
    
 ?>
 
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
      <?php echo  " <img class='img-fluid' src='../admin/images/$row[photo]'>";?> 
  </a>
    </div>
    <?php
}
?>
  </div>

</div>
           
</body>
</html>

<?php
include('fff.php');
?>



