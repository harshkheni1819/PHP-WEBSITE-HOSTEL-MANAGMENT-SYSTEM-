<?php
  include ('hhh.php');
  include ('connect.php');
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
if(isset($_POST['btnins']))
{
    $Staffid=$_POST['ddlstaffid'];
    $Staffname=$_POST['txtstaffname'];
    $Email=$_POST['txtemail'];
    $Doj=$_POST['txtdoj'];
    $Salary=$_POST['txtsalary'];
    $Aadharphoto=$_FILES['txtaadharphoto']['name'];
    $dst="images/".$Aadharphoto;
    $Photo=$_FILES['txtphoto']['name'];
    $dst="images/".$Photo;
    $q=mysqli_query($con,"insert into staff_details values('','$Staffid','$Staffname','$Email','$Doj','$Salary','$Aadharphoto','$Photo')");
    if($q)
    {
      move_uploaded_file($_FILES["txtaadharphoto"]["tmp_name"],$dst);
      move_uploaded_file($_FILES["txtphoto"]["tmp_name"],$dst);
            echo "<script>alert('Inserted');</script>";
    }
    else
    {
        echo "<script>alert('Not Inserted');</script>";
    }


}
?>
<form class="form-horizontal widget-box " role="form" method=post enctype="multipart/form-data">
             <div class="widget-body">
             <div class="widget-main " style="background-color:#d2e4ef; border:1px solid #d2e4ef; box-shadow:0px 0px 11px 0px; color:black">
			<h1 class="header blue lighter bigger" style="text-align:center;">	<b style="color:black;" > STAFF DETAILS </b> </h1>

											<div class="space-6"></div>
<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Select Staff </label>
    <div class="col-sm-9">
    <select name="ddlstaffid" class="col-xs-10 col-sm-5" />
<?php
$q=mysqli_query($con,"select * from staff_master");
while($row=mysqli_fetch_array($q))
{
  echo "<option value=$row[0]>$row[1]</option>";
}
?>
  </select>
    </div>
</div>  
<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Staffname </label>
    <div class="col-sm-9">
      <input type="text" name="txtstaffname" placeholder="Enter Staffname" class="col-xs-10 col-sm-5" required />
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email </label>
    <div class="col-sm-9">
      <input type="text" name="txtemail" placeholder="Enter Email" class="col-xs-10 col-sm-5" required />
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Doj </label>
    <div class="col-sm-9">
      <input type="date" name="txtdoj" placeholder="Enter Doj" class="col-xs-10 col-sm-5" required/>
     </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Salary </label>
    <div class="col-sm-9">
      <input type="text" name="txtsalary" placeholder="Enter Salary" class="col-xs-10 col-sm-5" required/>
     </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Aadharphoto </label>
    <div class="col-sm-9">
      <input type="file" name="txtaadharphoto" placeholder="Enter Aadharphoto" class="col-xs-10 col-sm-5" required/>
     </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Photo </label>
    <div class="col-sm-9">
      <input type="file" name="txtphoto" placeholder="Enter Photo" class="col-xs-10 col-sm-5" required/>
     </div>
</div>
  <div class="clearfix form-actions">
<div class="col-md-offset-3 col-md-9" style="text-align:center; marging-left:30%;">
  <button class="btn btn-info" type="submit" name='btnins'>
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

$q=mysqli_query($con,"select  gm.*,rm.* from staff_details gm,staff_master rm where gm.staffid=rm.staffid"); 
echo "<table class='table table-hover'>";
echo "<th> staffname";
echo "<th> email";

echo "<th> doj";

echo "<th> salary";
echo "<th>aadharphoto";
echo "<th>photo";
echo "<th colspan=2>Action";
while($row=mysqli_fetch_array($q))
{
  echo "<tr>";
  echo "<td>" .$row['staffname'];
  echo "<td>" .$row['email'];
  
  echo "<td>" .$row['doj'];
  
  echo "<td>" .$row['salary'];
  echo "<td><image src='images/$row[6]' height=100 width=100>";
  echo "<td><image src='images/$row[7]' height=100 width=100>";
echo "<td colspan=2><a href=staff_details_edit.php?x=$row[0]><image src=edit.png height=30 width=30></a>";
echo "<a href=staff_details_delete.php?x=$row[0]><image src=delete.png height=30 width=30></a>";
echo"</tr>";
 }
 echo"</table>";

?>



<?php
  include ('fff.php');
  ?>