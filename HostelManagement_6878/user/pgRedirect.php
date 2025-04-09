<?php
require('lib\config.php');
require('razorpay-php-2.9.0\Razorpay.php');

use Razorpay\Api\Api;

$api = new Api("rzp_test_TqyfrEDD0xkax3", "rSV7SEZ3q0apdDIhOtQqfiej");

$ORDER_ID = $_POST["ORDER_ID"];
$CUST_ID = $_POST["CUST_ID"];
$TXN_AMOUNT = $_POST["TXN_AMOUNT"];

// Create an order in Razorpay
$orderData = array( // Change the shorthand array to array()
    'receipt'         => $ORDER_ID,
    'amount'          => intval($TXN_AMOUNT * 100), // Amount in paisa (₹1 = 100 paisa)
    'currency'        => 'INR',
    'payment_capture' => 1 // Auto capture payment
);

$order = $api->order->create($orderData);
$order_id = $order['id'];
?>

<html>
<head>
<title>Merchant Check Out Page</title>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body>
	<center><h1>Please do not refresh this page...</h1></center>
	<form method="post" name="razorpay-form">
		<script>
			var options = {
				"key": "<?php echo RAZORPAY_KEY; ?>",
				"amount": "<?php echo $TXN_AMOUNT * 100; ?>",
				"currency": "INR",
				"name": "Aashray Stay",
				"description": "Order Payment",
				"order_id": "<?php echo $order_id; ?>",
				"handler": function (response){
					window.location.href = "callback.php?payment_id=" + response.razorpay_payment_id + "&order_id=" + response.razorpay_order_id + "&signature=" + response.razorpay_signature;
				},
				"prefill": {
					"name": "<?php echo $CUST_ID; ?>",
					"email": "hittu.n.kheni2382@gmail.com",
					"contact": "8980025341"
				},
				"theme": {
					"color": "#3399cc"
				}
			};
			var rzp = new Razorpay(options);
			rzp.open();
		</script>
	</form>
</body>
</html>
