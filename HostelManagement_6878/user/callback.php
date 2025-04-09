<?php
require('lib/config.php');
require('razorpay-php-2.9.0\Razorpay.php');

use Razorpay\Api\Api;

$api = new Api('rzp_test_YVRU1JIsCnae5z', 'qWh2RuUz01fMP5AN1QkRKisN');

if (!empty($_GET['payment_id']) && !empty($_GET['order_id']) && !empty($_GET['signature'])) {
    $attributes = [
        'razorpay_order_id' => $_GET['order_id'],
        'razorpay_payment_id' => $_GET['payment_id'],
        'razorpay_signature' => $_GET['signature']
    ];

    try {
        $api->utility->verifyPaymentSignature($attributes);
        // Payment successful, redirect to index.php
        header("Location: index.php?status=success");
        exit();
    } catch (Exception $e) {
        // Payment verification failed, redirect to index.php with failure status
        header("Location: index.php?status=failed");
        exit();
    }
} else {
    // Invalid request, redirect to index.php with error status
    header("Location: index.php?status=invalid");
    exit();
}
?>
