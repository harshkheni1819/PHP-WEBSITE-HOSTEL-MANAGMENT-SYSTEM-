<!DOCTYPE html>
<html lang="en">
	<head>
        
	</head>



<?php
  include ('hhh.php');
  include ('connect.php');
?>
<?php

error_reporting(1);





extract($_POST);

$target_dir = "test_upload/";

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

if($upd)
{
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if($imageFileType != "mp4" && $imageFileType != "avi" && $imageFileType != "mov" && $imageFileType != "3gp" && $imageFileType != "mpeg")
{
    echo "File Format Not Suppoted";
} 

else
{

$video_path=$_FILES['fileToUpload']['name'];

mysqli_query($con,"insert into video(video_name) values('$video_path')");

move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file);

echo "uploaded ";

}

}

//display all uploaded video

if($disp)

{

$query=mysqli_query($con,"select * from video");

	while($all_video=mysqli_fetch_array($query))

	{
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="assets/css/viewVideo.css" />

    </head>
	 
	 <video width="300" height="200" controls autoplay>
	<source src="test_upload/<?php echo $all_video['video_name']; ?>" type="video/mp4">
	</video> 
	
	<?php } } ?>


    <form class="form-horizontal widget-box " role="form" method=post enctype="multipart/form-data">
             <div class="widget-body">
			 <div class="widget-main " style="background-color:#d2e4ef; border:1px solid #d2e4ef; box-shadow:0px 0px 11px 0px; color:black">
			<h1 class="header blue lighter bigger" style="text-align:center;">	<b style="color:black;" >VIEW VIDEO </b> </h1>


											<div class="space-6"></div>


<div>
<table border="1" style="padding:10px; margin-left:240px;" >

<tr>

<td align=center>Video</td></tr>
<div class="space-6"></div>

<tr><td><input type="file" name="fileToUpload"/></td></tr>

<tr><td>

    <div class="clearfix form-actions upload"  >
<div class="col-md-offset-2 col-md-9" >
<input type="submit" style="background-color:#4790a6c4;"  value="Uplaod Video" name="upd"/>


</div>
    </div>
    <div class="clearfix form-actions">
<div class="col-md-offset-2 col-md-9">
<input type="submit" style="background-color:#4790a6c4; color:white; border:1px solid " black value="Display Video" name="disp"/>


</div>
    </div>

</td></tr>

</table>
</div>
</form>

<?php
  include ('fff.php');
  ?>
