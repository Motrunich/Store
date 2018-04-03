<?php
namespace payment;

require_once('PaymentInterface.php');
require_once('Payment.php');
require_once('Choice.php');

$cart = new shopping(1);
$cart->payType();



