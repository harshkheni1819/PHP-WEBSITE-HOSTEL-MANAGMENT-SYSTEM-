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
$rdid=$_GET['x'];
$q=mysqli_query($con,"select * from room_details where rdid=$rdid");
$row=mysqli_fetch_array($q);

if (isset($_POST['btnup'])) {
  $Roomid=$_POST['ddlroomid'];
    $Description= $_POST['txtdescription'];
    $Price= $_POST['txtprice'];
    $Terms= $_POST['txtterms'];
    $Photo=$_FILES['txtphoto']['name'];
    $dst="images/".$Photo;
    $q = mysqli_query($con, "update room_details set roomid='$Roomid', description='$Description',price='$Price',terms='$Terms',photo='$Photo' where rdid=$rdid");
    if ($q) {
        move_uploaded_file($_FILES["txtphoto"]["tmp_name"],$dst);
        echo "<script>window.location.assign('room_details.php')</script>";
    } else {
        echo "not updated..";
    }
}
?>
<form class="form-horizontal widget-box " role="form" method=post enctype="multipart/form-data">
             <div class="widget-body">
             <div class="widget-main " style="background-color:#d2e4ef; border:1px solid #d2e4ef; box-shadow:0px 0px 11px 0px; color:black">
			<h1 class="header blue lighter bigger" style="text-align:center;">	<b style="color:black;" > ROOM DETAILS </b> </h1>

											<div class="space-6"></div>
<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Select Room</label>
    <div class="col-sm-9">
    <select name="ddlroomid" class="col-xs-10 col-sm-5"   />
<?php
$q=mysqli_query($con,"select * from room_master");
while($row=mysqli_fetch_array($q))
{
  echo "<option value=$row[0]>$row[1]</option>";
}
?>
  </select>
    </div>
</div>  
<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Description </label>
						<div class="col-sm-9">
 							<textarea name=txtdescription id=txtdescription  placeholder="Enter Description" class="col-xs-10 col-sm-5"  value="<?php echo $row['description']; ?>"required/></textarea>
								</div>
				</div>
<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Price</label>
    <div class="col-sm-9">
      <input type="text" name="txtprice" placeholder="Enter Price" class="col-xs-10 col-sm-5"    value="<?php echo $row['price']; ?>"required/>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Terms</label>
    <div class="col-sm-9">
    <textarea name=txtterms id=txtterms  placeholder="Enter Terms" class="col-xs-10 col-sm-5" required/></textarea>
    </div>
</div>
  <div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Photo </label>
    <div class="col-sm-9">
      <input type="file" name="txtphoto" placeholder="Enter Photo" class="col-xs-10 col-sm-5"  required/>
      
     </div>
</div>
<div class="clearfix form-actions">
<div class="col-md-offset-3 col-md-9"style="text-align:center; marging-left:30%;">
  <button class="btn btn-info" type="submit" name='btnup'>
    <i class="ace-icon fa fa-check bigger-110"></i>
      Submit
  </button>
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
    CKEDITOR.replace('txtterms');
	</script>
</html>
<?php
include('fff.php');
?>