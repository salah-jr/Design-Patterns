<?php

namespace src\Behavioral\Strategy;

class VisaCardPaymentStrategy implements PaymentStrategy
{

    public function processPayment($amount): void
    {
        print_r('Processing payment of Visa Card...' . "\n");
        print_r("Calculate fees of the amount " . $amount . " for Visa Card..." . "\n\n");
    }
}