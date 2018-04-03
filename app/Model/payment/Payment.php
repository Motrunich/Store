<?php

namespace payment;

require_once('PaymentInterface.php');

class CreditCard implements PaymentInterface {
    private $Number = '';
    private $MonthEnd = '';
    private $YearEnd = '';
    private $cvv = '';

    public function pay($type) {

        echo "Оплата ". $type. " кредитою картою";
    }
}

class PayPal implements PaymentInterface {

    private $Email = '';

    public function pay($type) {

        echo "Оплата ". $type. " за допомогою PayPal";
    }
}

class Cash implements PaymentInterface {

    private $paySMTH = '';

    public function pay($type) {

        echo "Оплата ". $type. " готівкою";
    }
}