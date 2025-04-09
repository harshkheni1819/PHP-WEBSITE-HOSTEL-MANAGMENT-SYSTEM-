<?php
  include ('hhh.php');
  include ('connect.php');
?>
   <!doctype html>
<html>

<head>

    <link rel="stylesheet" href="event/css/news.css">
    
    
</head>
<style>
          .text{
            
           color:black;
          }
          h2{
            text-align: center;
            
          }
</style>
    <body>    
          <!--================Breadcrumb Area =================-->
          <section class="breadcrumb_area">
          <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="about_banner.jpg"style="top: 500;"></div>
            <!--div class="" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div-->
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Event</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Event</li>
                    </ol>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->
        <div class="container">
        <h2 class="title_color">Event</h2>
        </div>
        <div class="centerflipcards">
        <?php
$q=mysqli_query($con,"select * from event");  
while($row=mysqli_fetch_array($q))
{
 ?>
	<div class="square-flip">
		<div class='square' data-image="">
			<div class="square-container">
      
			<?php echo "	<img src='../admin/images/$row[photo1]' class='boxshadow' alt=''>"?>
				<h2 class="textshadow"></h2>
				<h3 class="textshadow"></h3>
			</div>
			<div class="flip-overlay"></div>
		</div>
		<div class='square2' data-image="">
			<div class="square-container2">
				<div class="align-center"></div>
				<a href="" target="_blank"style="font-color:black" > <h4><?php echo $row[1];?></h4>
      <p><?php echo $row[2];?></p></a>
			</div>
			<div class="flip-overlay"></div>
		</div>
	</div>
<?php
}
?>
  
  <div class="clearfix"></div>
 
  <br/>
  <br/>
  <br/>

</div>
</body>
</html>



	<?php
  include('fff.php')
  ?>