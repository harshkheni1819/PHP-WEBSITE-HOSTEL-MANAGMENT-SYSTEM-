<?php
include('hhh.php');
include('connect.php');
?>
<style>
  .form-actions{
    background-color:#d2e4ef;;
  }
  .btn-submit{
    background-color:#62A8D1 !important;
    
  }
  .col-md-offset-3 {
    margin-left: 17% !important;
}

</style>
<?php
$gid=$_GET['x'];
$q=mysqli_query($con,"select * from gallery_master where  gid=$gid");
$row=mysqli_fetch_array($q);
if (isset($_POST['btnup']))
 {
  $gname = $_POST['txtgname'];
    $Photo=$_FILES['txtphoto']['name'];
    $dst="images/".$Photo;
    $q = mysqli_query($con, "update gallery_master set gname='$gname', photo='$Photo' where gid=$gid");
    if ($q) {
        move_uploaded_file($_FILES["txtphoto"]["tmp_name"],$dst);
        echo "<script>window.location.assign('gallery_master.php')</script>";
    } else {
        echo "not updated..";
    }
}
?>

<form class="form-horizontal widget-box " role="form" method=post enctype="multipart/form-data">
             <div class="widget-body">
             <div class="widget-main " style="background-color:#d2e4ef; border:1px solid #d2e4ef; box-shadow:0px 0px 11px 0px; color:black">
			<h1 class="header blue lighter bigger" style="text-align:center;">	<b style="color:black;" > GALLERY MASTER </b> </h1>


											<div class="space-6"></div>

                      <div class="form-group">
	    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Gname </label>
			<div class="col-sm-9">
				<input type="text" name="txtgname" placeholder="Enter Gname" class="col-xs-10 col-sm-5" value="<?php echo $row['gname']; ?>" required />
			</div>
	</div>
  <div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Photo </label>
    <div class="col-sm-9">
      <input type="file" name="txtphoto" placeholder="Enter Photo" class="col-xs-10 col-sm-5" value="<?php echo $row['photo']; ?>" required />
     </div>
</div>


  <div class="clearfix form-actions">
<div class="col-md-offset-3 col-md-9"style="text-align:center; marging-left:30%;">
  <button class="btn btn-info" type="submit" name='btnup'>
    <i class="ace-icon fa fa-check bigger-110"></i>
      Submit
</button>

</div><!-- /.widget-body -->
								</div><!-- /.signup-box -->
							</div><!-- /.position-relative -->

  &nbsp; &nbsp; &nbsp;
    </div>
      </div>
</form>
<?php
include('fff.php');
?>