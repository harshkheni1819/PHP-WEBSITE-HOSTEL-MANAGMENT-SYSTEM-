<!-- <!doctype html> -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="l.jpg" type="image/png">
        <title>AASHRAY STAY</title>
        
<link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css>	
<link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js>
<link rel="stylesheet" href="receipt/css/receipt.css">

    
</head>

    <body style="background-color: #363A3D;">

    <?php
    session_start();
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");

?>
    <link rel="stylesheet" href= https://use.fontawesome.com/releases/v5.7.2/css/all.css>
<div class="container">
    <div class="row m-0">
        <div class="col-lg-7 pb-5 pe-lg-5">
            <div class="row">

            <?php
            
           include('connect.php');
    $roomid=$_SESSION['rm'];
    
    echo 'Room Id : ' . $roomid;
       $q=mysqli_query($con,"select * from room_master where roomid=$roomid");  
       while($row=mysqli_fetch_array($q))
       {
        
            ?>
         
            <?php echo  " <img class='img-fluid' src='../admin/images/$row[photo]'>";?> 


                 <div class="row m-0 bg-light">
                    <div class="col-md-4 col-6 ps-30 pe-0 my-4">
                        <p class="text"></p>
                        <p class="h5"><span class="ps-1"><?php echo  $row['roomtype'];?></span></p>
                    </div>
                </div> 
            </div>
        </div>
        <?php
       }
       ?>
        <div class="col-lg-5 p-0 ps-lg-4">
            <div class="row m-0">
                <div class="col-12 px-4">
                    <div class="d-flex align-items-end mt-4 mb-2">
                        <p class="h4 m-0"><span class="pe-1">Price</span><span class="pe-1"></span><span class="pe-1"></span></p>
                        <P class="ps-3 textmuted"></P>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <p class="textmuted"></p>
                        <?php
                         $q1=mysqli_query($con,"select * from room_details where roomid=$roomid");
            $row1=mysqli_fetch_array($q1);
            {}
                        ?>
                         
                        <p class="fs-14 fw-bold"></p>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <p class="textmuted">Monthly price :</p>
                        <p class="fs-14 fw-bold"><span class="fas fa-rupee-sign mt-1 pe-1 fs-14 "></span><?php echo $row1['price'];?></p>
                    </div>
                    </php
    }
    ?>
                    <div class="d-flex justify-content-between mb-2">
                        <p class="textmuted">Total month :</p>
                        <p class="fs-14 fw-bold"><?php  $totalmonths= $_SESSION['totalmonths'];
                        echo round($totalmonths);
                        ?></p>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <p class="textmuted"></p>
                        <p class="fs-14 fw-bold"></p>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <p class="textmuted fw-bold">Total :</p>
                        <div class="d-flex align-text-top "> <span class="fas fa-rupee-sign mt-2 pe-1 fs-18 "></span>
                        <span class="h4"><?php echo $total_amount=$row1['price']*$totalmonths;?></span> </div>
                    </div>
                </div>
                <!-- <div class="col-12 px-0">
                    <div class="row bg-light m-0">
                        <div class="col-12 px-4 my-4">
                            <p class="fw-bold">Payment detail</p>
                        </div>
                        <div class="col-12 px-4">
                            <div class="d-flex mb-4"> <span class="">
                                    <p class="text-muted">Card number</p> <input class="form-control" type="text" value="4485 6888 2359 1498" placeholder="1234 5678 9012 3456">
                                </span>
                                <div class=" w-100 d-flex flex-column align-items-end">
                                    <p class="text-muted">Expires</p> <input class="form-control2" type="text" value="01/2020" placeholder="MM/YYYY">
                                </div>
                            </div>
                            <div class="d-flex mb-5"> <span class="me-5">
                                    <p class="text-muted">Cardholder name</p> <input class="form-control" type="text" value="David J.Frias" placeholder="Name">
                                </span>
                                <div class="w-100 d-flex flex-column align-items-end">
                                    <p class="text-muted">CVC</p> <input class="form-control3" type="text" value="630" placeholder="XXX">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row m-0">
                        <div class="col-12 mb-4 p-0">
                            <div class="btn btn-primary">Purchase<span class="fas fa-arrow-right ps-2"></span> </div>
                        </div>
                    </div>
                </div> -->
                <form method="post" action="pgRedirect.php">
                    
		<table class="table table-bordered border-secondary">
			<tbody>
				<tr>
					<th>S.No</th>
					<th>Label</th>
					<th>Value</th>
				</tr>
                 
				<tr>
					 <td>1</td> 
					<td><label>txnAmount*</label></td>
					<td><input title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"
						value="<?php echo $total_amount=$row1['price']*$totalmonths;?>">
					</td>
				</tr>
				
				
			</tbody>
		</table>
        <br>
                
					<input value="CheckOut" class="btn btn-success w-100" type="submit"	onclick="">
                    <tr>
					 <!-- <td>1</td> 
					 <td><label>ORDER_ID::*</label></td>  -->
					<input id="ORDER_ID" type="hidden"   tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						 value="<?php echo  "ORDS" . rand(10000,99999999)?>" 
					</td>
				</tr>
				<tr>
					 <!-- <td>2</td> 
					 <td><label>CUSTID ::*</label></td>  -->
					<td><input ty id="CUST_ID" type="hidden" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001"></td>
				</tr>
				<tr>
					 <!-- <td>3</td> 
					 <td><label>INDUSTRY_TYPE_ID ::*</label></td>  -->
					<td><input id="INDUSTRY_TYPE_ID" type="hidden" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail"></td>
				</tr>
				<tr>
					 <!-- <td>4</td> 
					 <td><label>Channel ::*</label></td>  -->
					<td><input id="CHANNEL_ID" type="hidden" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
					</td>
				</tr> 
	</form>
            </div>
        </div>
    </div>
</div>
</body>
</html>