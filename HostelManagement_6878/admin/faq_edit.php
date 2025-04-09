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
$q=mysqli_query($con,"select * from faq where id=$id");
$row=mysqli_fetch_array($q);

if (isset($_POST['btnup'])) {
    $question= $_POST['txtques'];
    $answer = $_POST['txtans'];
    $q = mysqli_query($con, "update faq set question='$question',answer='$answer' where id=$id");
    if ($q) {
        echo "<script>window.location.assign('faq.php')</script>";
    } else {
        echo "not updated..";
    }
}
?>
<form class="form-horizontal widget-box " role="form" method=post>
             <div class="widget-body">
			 <div class="widget-main " style="background-color:#d2e4ef; border:1px solid #d2e4ef; box-shadow:0px 0px 11px 0px; color:black">
			<h1 class="header blue lighter bigger" style="text-align:center;">	<b style="color:black;" > 	FREQUENTLY ASKED QUESTION </b> </h1>
							
											<div class="space-6"></div>
    <div class="form-group">
	    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Question </label>
			<div class="col-sm-9">
				<input type="text" name="txtques" placeholder="Enter Question" class="col-xs-10 col-sm-5" value="<?php echo $row['question']; ?>"required/>
			</div>
	</div>
    <div class="form-group">
	    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Answer </label>
			<div class="col-sm-9">
				<input type="text" name="txtans" placeholder="Enter Answer" class="col-xs-10 col-sm-5" value="<?php echo $row['answer']; ?>"required />
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
