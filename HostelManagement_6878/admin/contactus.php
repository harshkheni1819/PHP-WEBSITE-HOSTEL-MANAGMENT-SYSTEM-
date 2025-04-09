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
      $name=$_POST['txtname'];
      $email=$_POST['txtemail'];
	  $mobileno=$_POST['txtmobileno'];
	  $address=$_POST['txtaddress'];
      $q=mysqli_query($con,"insert into contactus values('','$name','$email','$mobileno','$address')");
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
  <form class="form-horizontal widget-box " role="form" method=post>
             <div class="widget-body">
			 <div class="widget-main " style="background-color:#d2e4ef; border:1px solid #d2e4ef; box-shadow:0px 0px 11px 0px; color:black">
											<h1 class="header blue lighter bigger" style="text-align:center;">	<b style="color:black;" > CONTACT US </b> </h1>

											<div class="space-6"></div>

    <div class="form-group">
	    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Name </label>
			<div class="col-sm-9">
				<input type="text" name="txtname" placeholder="Enter Name" class="col-xs-10 col-sm-5"required />
			</div>
</div>

      <div class="form-group">
	    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email </label>
			<div class="col-sm-9">
				<input type="text" name="txtemail" placeholder="Enter Email" class="col-xs-10 col-sm-5"required/>
			</div>
</div>

      <div class="form-group">
	    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Mobileno </label>
			<div class="col-sm-9">
				<input type="text" name="txtmobileno" placeholder="Enter Mobileno" class="col-xs-10 col-sm-5"required />
			</div>
	</div>

    <div class="form-group">
	    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Address </label>
			<div class="col-sm-9">
				<input type="text" name="txtaddress" placeholder="Enter Address" class="col-xs-10 col-sm-5"required />
			</div>
	</div>
  
    <div class="clearfix form-actions">
	<div class="col-md-offset-3 col-md-9"style="text-align:center; marging-left:30%;">
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


       $q=mysqli_query($con,"select * from contactus");  
       echo "<table class='table table-hover'>";
	   echo "<th>name";
	   echo "<th>email";
	   echo "<th>mobileno";
	   echo "<th>address";
	   echo "<th colspan=2>Action";
       while($row=mysqli_fetch_array($q))
       {
         echo "<tr>";
         echo "<td>".$row['name'];
		 echo "<td>".$row['email'];
		 echo "<td>".$row['mobileno'];
         echo "<td>".$row['address'];
		echo "<td colspan=2><a href=contactus_edit.php?x=$row[0]><image src=edit.png height=30 width=30></a>";
		echo "<a href=contactus_delete.php?x=$row[0]><image src=delete.png height=30 width=30></a>";
       echo"</tr>";
        }
        echo"</table>";
	
?>

 

   
<?php
  include ('fff.php');
?>