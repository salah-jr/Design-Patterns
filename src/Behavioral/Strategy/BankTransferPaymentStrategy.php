<?php

namespace src\Behavioral\Strategy;

class BankTransferPaymentStrategy implements PaymentStrategy
{
    public function processPayment($amount): void
    {
        print_r('Processing payment of Bank transfer...' . "\n");
        print_r("Calculate fees of the amount " . $amount . " for Bank transfer..." . "\n\n");
    }
}