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
$fid=$_GET['x'];
$q=mysqli_query($con,"select * from menu where fid=$fid");
$row=mysqli_fetch_array($q);

if (isset($_POST['btnup'])) {
    $Day= $_POST['txtday'];
    $Breakfast = $_POST['txtbreakfast'];
    $Lunch = $_POST['txtlunch'];
    $Eveningsnacks = $_POST['txteveningsnacks'];
    $Dinner = $_POST['txtdinner'];
    $q = mysqli_query($con, "update menu set day='$Day',breakfast='$Breakfast',lunch='$Lunch',eveningsnacks='$Eveningsnacks',dinner='$Dinner' where fid=$fid");
    if ($q) {
        echo "<script>window.location.assign('menu.php')</script>";
    } else {
        echo "not updated..";
    }
}
?>
<form class="form-horizontal widget-box " role="form" method=post>
             <div class="widget-body">
			 <div class="widget-main " style="background-color:#d2e4ef; border:1px solid #d2e4ef; box-shadow:0px 0px 11px 0px; color:black">
			<h1 class="header blue lighter bigger" style="text-align:center;">	<b style="color:black;" > MENU </b> </h1>
			
											<div class="space-6"></div>
    <div class="form-group">
	    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Day </label>
			<div class="col-sm-9">
				<input type="text" name="txtday" placeholder="Enter Day" class="col-xs-10 col-sm-5" value="<?php echo $row['day']; ?>" required/>
			</div>
	</div>
    <div class="form-group">
	    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Breakfast </label>
			<div class="col-sm-9">
				<input type="text" name="txtbreakfast" placeholder="Enter Breakfast" class="col-xs-10 col-sm-5" value="<?php echo $row['breakfast']; ?>" required />
			</div>
	</div>
    <div class="form-group">
	    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Lunch</label>
			<div class="col-sm-9">
				<input type="text" name="txtlunch" placeholder="Enter Lunch" class="col-xs-10 col-sm-5" value="<?php echo $row['lunch']; ?>" required/>
			</div>
	</div>
    <div class="form-group">
	    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Eveningsnacks </label>
			<div class="col-sm-9">
				<input type="text" name="txteveningsnacks" placeholder="Enter Eveningsnacks" class="col-xs-10 col-sm-5"  value="<?php echo $row['eveningsnacks']; ?>"required/>
			</div>
	</div>
    <div class="form-group">
	    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Dinner </label>
			<div class="col-sm-9">
				<input type="text" name="txtdinner" placeholder="Enter Dinner" class="col-xs-10 col-sm-5" value="<?php echo $row['dinner']; ?>" required/>
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