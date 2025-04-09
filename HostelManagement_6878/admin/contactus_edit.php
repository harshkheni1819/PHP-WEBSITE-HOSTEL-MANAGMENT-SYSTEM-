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
$id=$_GET['x'];
$q=mysqli_query($con,"select * from contactus where id=$id");
$row=mysqli_fetch_array($q);

if (isset($_POST['btnup'])) {
    $name = $_POST['txtname'];
    $email = $_POST['txtemail'];
    $mobileno = $_POST['txtmobileno'];
    $address = $_POST['txtaddress'];
    $q = mysqli_query($con, "update contactus set name='$name',email='$email',mobileno='$mobileno',address='$address' where id=$id");
    if ($q) {
        echo "<script>window.location.assign('contactus.php')</script>";
    } else {
        echo "not updated..";
    }
}
?>
<form class="form-horizontal widget-box " role="form" method=post>
             <div class="widget-body">
			 <div class="widget-main " style="background-color:#d2e4ef; border:1px solid #d2e4ef; box-shadow:0px 0px 11px 0px; color:black">
											<h1 class="header blue lighter bigger" style="text-align:center;">	<b style="color:black;" > CONTACT US </b> </h1>

											<div class="space-6"></div>

    <div class="form-group">
	    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Name </label>
			<div class="col-sm-9">
				<input type="text" name="txtname" placeholder="Enter Name" class="col-xs-10 col-sm-5" value="<?php echo $row['name']; ?>"required />
			</div>
</div>

      <div class="form-group">
	    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email </label>
			<div class="col-sm-9">
				<input type="text" name="txtemail" placeholder="Enter Email" class="col-xs-10 col-sm-5" value="<?php echo $row['email']; ?>"required />
			</div>
</div>

      <div class="form-group">
	    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Mobileno </label>
			<div class="col-sm-9">
				<input type="text" name="txtmobileno" placeholder="Enter Mobileno" class="col-xs-10 col-sm-5" value="<?php echo $row['mobileno']; ?>"required />
			</div>
	</div>

    <div class="form-group">
	    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Address </label>
			<div class="col-sm-9">
				<input type="text" name="txtaddress" placeholder="Enter Address" class="col-xs-10 col-sm-5" value="<?php echo $row['address']; ?>"required />
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