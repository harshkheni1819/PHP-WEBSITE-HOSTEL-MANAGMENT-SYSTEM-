<?php
include('connect.php');
include('hhh.php');
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
$fid=$_GET['x'];
$q=mysqli_query($con,"select * from facility_master where fid=$fid");
$row=mysqli_fetch_array($q);

if (isset($_POST['btnup'])) {
    $facility_name= $_POST['txtfacility_name'];
    $facility_description = $_POST['txtfacility_description'];

    $q = mysqli_query($con, "update facility_master set facility_name='$facility_name',facility_description='$facility_description' where fid=$fid");
    if ($q) {
       
        echo "<script>window.location.assign('facility_master.php')</script>";
    } else {
        echo "not updated..";
    }
}
?>

<form class="form-horizontal widget-box " role="form" method=post >
             <div class="widget-body">
			 <div class="widget-main " style="background-color:#d2e4ef; border:1px solid #d2e4ef; box-shadow:0px 0px 11px 0px; color:black">
			<h1 class="header blue lighter bigger" style="text-align:center;">	<b style="color:black;" > FACILITY MASTER </b> </h1>
				
											<div class="space-6"></div>
    <div class="form-group">
	    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> facility_name </label>
			<div class="col-sm-9">
				<input type="text" name="txtfacility_name" placeholder="Enter facility_name" class="col-xs-10 col-sm-5" value="<?php echo $row['facility_name']; ?>"required  />
			</div>
	</div>
    <div class="form-group">
	    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> facility_description </label>
			<div class="col-sm-9">
			<textarea name=txtfacility_description id=txtfacility_description  placeholder="Enter facility_description" class="col-xs-10 col-sm-5" value="<?php echo $row['facility_description']; ?>" required/></textarea>
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
		CKEDITOR.replace('txtfacility_description');
	</script>
</html>
<?php
  include ('fff.php');
  
?>