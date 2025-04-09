<?php
include('hhh.php');
include('connect.php');
?>
<html>
<head>
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script></head>
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
<body>
  <?php
$eventid=$_GET['x'];
$q=mysqli_query($con,"select * from event where eventid=$eventid");
$row=mysqli_fetch_array($q);

if (isset($_POST['btnup'])) {
    $eventname=$_POST['txteventname'];
    $description=$_POST['txtdescription'];
    $photo1=$_FILES['txtphoto1']['name'];
    $dst="images/".$photo1;
   
  $q = mysqli_query($con, "update event set eventname='$eventname',description='$description',photo1='$photo1' where eventid=$eventid");
    if ($q) {
        
        move_uploaded_file($_FILES["txtphoto1"]["tmp_name"],$dst);
       
        echo "<script>window.location.assign('event.php')</script>";
    } else {
        echo "not updated..";
    }
}
?>

<form class="form-horizontal widget-box " role="form" method=post enctype="multipart/form-data">
             <div class="widget-body">
             <div class="widget-main " style="background-color:#d2e4ef; border:1px solid #d2e4ef; box-shadow:0px 0px 11px 0px; color:black">
			<h1 class="header blue lighter bigger" style="text-align:center;">	<b style="color:black;" > EVENT </b> </h1>
											<div class="space-6"></div>

<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Eventname </label>
    <div class="col-sm-9">
      <input type="text" name="txteventname" placeholder="Enter eventname" class="col-xs-10 col-sm-5" required />
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Description </label>
    <div class="col-sm-9">
    <textarea name=txtdescription id=txtdescription  placeholder="Enter Description" class="col-xs-10 col-sm-5" value="<?php echo $row['description']; ?>" required/></textarea>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Photo1 </label>
    <div class="col-sm-9">
      <input type="file" name="txtphoto1" placeholder="Enter Photo1" class="col-xs-10 col-sm-5" />
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
</body>
	<script>
		CKEDITOR.replace('txtdescription');
	</script>
</html>
<?php
  include ('fff.php');
  ?>