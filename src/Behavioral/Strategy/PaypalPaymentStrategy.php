<?php

namespace src\Behavioral\Strategy;

class PaypalPaymentStrategy implements PaymentStrategy
{

    public function processPayment($amount): void
    {
        print_r('Processing payment of Paypal...' . "\n");
        print_r("Calculate fees of the amount " . $amount . " for Paypal..." . "\n\n");
    }
}