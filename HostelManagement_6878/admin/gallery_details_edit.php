<?php
include('connect.php');
include('hhh.php');
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

$gdid=$_GET['x'];
$q=mysqli_query($con,"select * from gallery_details where gdid=$gdid");
$row=mysqli_fetch_array($q);

if (isset($_POST['btnup'])) {
    $gid=$_POST['ddlgid'];
    $Photo=$_FILES['txtphoto']['name'];
    $dst="images/".$Photo;
    $q = mysqli_query($con, "update gallery_details set gid='$gid',photo='$Photo' where gdid=$gdid");
    if ($q) {
        move_uploaded_file($_FILES["txtphoto"]["tmp_name"],$dst);
        echo "<script>window.location.assign('gallery_details.php')</script>";
    } else {
        echo "not updated..";
    }
}
?>
<form class="form-horizontal widget-box " role="form" method=post enctype="multipart/form-data">
             <div class="widget-body">
             <div class="widget-main " style="background-color:#d2e4ef; border:1px solid #d2e4ef; box-shadow:0px 0px 11px 0px; color:black">
			<h1 class="header blue lighter bigger" style="text-align:center;">	<b style="color:black;" > GALLERY DETAILS </b> </h1>

											<div class="space-6"></div>
<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Select gname</label>
    <div class="col-sm-9">
    <select name="ddlgid" class="col-xs-10 col-sm-5" />
<?php
$q=mysqli_query($con,"select * from gallery_master");
while($row=mysqli_fetch_array($q))
{
  echo "<option value=$row[0]>$row[1]</option>";
}
?>
  </select>
    </div>
</div>  


<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Photo </label>
    <div class="col-sm-9">
      <input type="file" name="txtphoto" placeholder="Enter Photo" class="col-xs-10 col-sm-5" required/>
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
  include ('fff.php');
  ?>