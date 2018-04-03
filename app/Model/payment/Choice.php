<?php

namespace payment;
require_once('Payment.php');
require_once('PaymentInterface.php');

class shopping
{
    public $type;
    public function __construct($type) {

        $this->type = $type;
    }

    public function getType() {

        return $this->type;
    }

    public function setType($type) {

        $this->type = $type;
    }
    public function payType()
    {
        switch ($this->type) {
            case $this->type == 1:
                $payment = new CreditCard();
                break;
            case $this->type == 2:
                $payment = new PayPal();
                break;
            case $this->type == 3:
                $payment = new Cash();
                break;
            default:
                echo 'Будь ласка оберіть метод оплати';
                break;

        }

  }
    }

$cart = new shopping(2);
$cart->payType();
