<?php
  include ('hhh.php');
  include ('connect.php');
?>
  <!--================Breadcrumb Area =================-->
  <section class="breadcrumb_area">
            <div class="" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Menu</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Menu</li>
                    </ol>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->
        <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<div class="container">
<h2 class="title_color"style="text align ceneter">Menu Table</h2>          
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Days</th>
        <th>Breakfast</th>
        <th>Lunch</th>
        <th>Snacks</th>
        <th>Dinner</th>
      </tr>
    </thead>
    <tbody>
    <?php
$q=mysqli_query($con,"select * from menu");  
while($row=mysqli_fetch_array($q))
{
?>
      <tr>
        <td> <?php echo $row[1];?></td>
        <td> <?php echo $row[2];?></td>
        <td> <?php echo $row[3];?></td>
        <td> <?php echo $row[4];?></td>
        <td> <?php echo $row[5];?></td>
      </tr>
      <?php
}
?>
     

    </tbody>
  </table>
</div>

</body>
</html>


        <?php
  include ('fff.php');
  
?>