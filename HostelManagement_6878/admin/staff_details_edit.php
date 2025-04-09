<?php
include('hhh.php');
include('connect.php');

// Check if 'x' is set in the URL
if (!isset($_GET['x']) || empty($_GET['x'])) {
    die("Invalid request.");
}

$staffdetailid = $_GET['x'];
$q = mysqli_query($con, "SELECT * FROM staff_details WHERE staffdetailid=$staffdetailid");

// Fetch row and check if the record exists
$row = mysqli_fetch_array($q);
if (!$row) {
    die("Staff details not found.");
}

if (isset($_POST['btnup'])) {
    $Staffid = $_POST['ddlstaffid'];
    $Staffname = $_POST['txtstaffname'];
    $Email = $_POST['txtemail'];
    
    $Doj = $_POST['txtdoj'];
    
    $Salary = $_POST['txtsalary'];

    // File upload handling
    $Aadharphoto = $_FILES['txtaadharphoto']['name'];
    $Aadharphoto_dst = "images/" . $Aadharphoto;
    $Photo = $_FILES['txtphoto']['name'];
    $Photo_dst = "images/" . $Photo;

    // Update query
    $q = mysqli_query($con, "UPDATE staff_details SET 
        staffid='$Staffid',
        staffname='$Staffname',
        email='$Email',
        
        doj='$Doj',
        
        salary='$Salary',
        aadharphoto='$Aadharphoto',
        photo='$Photo'
        WHERE staffdetailid=$staffdetailid");

    if ($q) {
        move_uploaded_file($_FILES["txtaadharphoto"]["tmp_name"], $Aadharphoto_dst);
        move_uploaded_file($_FILES["txtphoto"]["tmp_name"], $Photo_dst);
        echo "<script>window.location.assign('staff_details.php')</script>";
    } else {
        echo "Update failed.";
    }
}
?>

<style>
  .form-actions { background-color: #d2e4ef; }
  .btn-submit { background-color: #62A8D1 !important; }
  .col-md-offset-3 { margin-left: 17% !important; }
</style>

<form class="form-horizontal widget-box" role="form" method="post" enctype="multipart/form-data">
  <div class="widget-body">
    <div class="widget-main" style="background-color:#d2e4ef; border:1px solid #d2e4ef; box-shadow:0px 0px 11px 0px; color:black">
      <h1 class="header blue lighter bigger" style="text-align:center;">
        <b style="color:black;">STAFF DETAILS</b>
      </h1>
      <div class="space-6"></div>

      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right">Select Staff</label>
        <div class="col-sm-9">
          <select name="ddlstaffid" class="col-xs-10 col-sm-5">
            <?php
            $q = mysqli_query($con, "SELECT * FROM staff_master");
            while ($staff = mysqli_fetch_array($q)) {
              $selected = ($staff[0] == $row['staffid']) ? "selected" : "";
              echo "<option value='$staff[0]' $selected>$staff[1]</option>";
            }
            ?>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right">Staff Name</label>
        <div class="col-sm-9">
          <input type="text" name="txtstaffname" class="col-xs-10 col-sm-5" value="<?= $row['staffname']; ?>" required />
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right">Email</label>
        <div class="col-sm-9">
          <input type="email" name="txtemail" class="col-xs-10 col-sm-5" value="<?= $row['email']; ?>" required />
        </div>
      </div>

      

      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right">Date of Joining</label>
        <div class="col-sm-9">
          <input type="date" name="txtdoj" class="col-xs-10 col-sm-5" value="<?= $row['doj']; ?>" required />
        </div>
      </div>

      

      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right">Salary</label>
        <div class="col-sm-9">
          <input type="number" name="txtsalary" class="col-xs-10 col-sm-5" value="<?= $row['salary']; ?>" required />
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right">Aadhar Photo</label>
        <div class="col-sm-9">
          <input type="file" name="txtaadharphoto" class="col-xs-10 col-sm-5" />
          <br>
          <img src="images/<?= $row['aadharphoto']; ?>" width="100" />
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right">Photo</label>
        <div class="col-sm-9">
          <input type="file" name="txtphoto" class="col-xs-10 col-sm-5" />
          <br>
          <img src="images/<?= $row['photo']; ?>" width="100" />
        </div>
      </div>

      <div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9" style="text-align:center;">
          <button class="btn btn-info" type="submit" name="btnup">
            <i class="ace-icon fa fa-check bigger-110"></i> Submit
          </button>
        </div>
      </div>
    </div>
  </div>
</form>

<?php include('fff.php'); ?>