<?php
  include ('hhh.php');
  include ('connect.php');
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
</style>
<body>
<?php
if(isset($_POST['btnins']))
{
    $Facility_name=$_POST['txtfacility_name'];
    $Facility_description=$_POST['txtfacility_description'];
   
    $q=mysqli_query($con,"insert into facility_master values('','$Facility_name','$Facility_description')");
    if($q)
    {
        
            echo "<script>alert('Inserted');</script>";
    }
    else
    {
        echo "<script>alert('Not Inserted');</script>";
    }


}
?>

<form class="form-horizontal widget-box " role="form" method=post >
             <div class="widget-body">
										<div class="widget-main " style="background-color:#d2e4ef; border:1px solid #d2e4ef; box-shadow:0px 0px 11px 0px; color:black">
											<h1 class="header blue lighter bigger" style="text-align:center;">	<b style="color:black;" > FACILITY MASTER </b> </h1>

											<div class="space-6"></div>
    <div class="form-group">
	    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Facility_name </label>
			<div class="col-sm-9">
				<input type="text" name="txtfacility_name" placeholder="Enter facility_name" class="col-xs-10 col-sm-5"  required />
			</div>
	</div>
    <div class="form-group">
	    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Facility_description </label>
			<div class="col-sm-9">
				
        <textarea name=txtfacility_description id=txtfacility_description  placeholder="Enter facility_description" class="col-xs-10 col-sm-5" required/></textarea>
			</div>
	</div>

  <div class="clearfix form-actions">
	<div class="col-md-offset-2 col-md-9" style="text-align:center; marging-left:20%;">
		<button class="btn btn-submit" type="submit" name='btnins' style="background-color:white; border-radius:10% ">
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


       $q=mysqli_query($con,"select * from facility_master"); 
       echo "<table class='table table-hover'>";
       echo "<th> facility_name";
       echo "<th> facility_description";
	  
	   echo "<th colspan=2>Action";
       while($row=mysqli_fetch_array($q))
       {
         echo "<tr>";
         echo "<td>" .$row['facility_name'];
         echo "<td>" .$row['facility_description'];

		echo "<td colspan=2><a href=facility_master_edit.php?x=$row[0]><image src=edit.png height=30 width=30></a>";
		echo "<a href=facility_master_delete.php?x=$row[0]><image src=delete.png height=30 width=30></a>";
       echo"</tr>";
        }
        echo"</table>";
	
?>

<?php
  include ('fff.php');
  
?>