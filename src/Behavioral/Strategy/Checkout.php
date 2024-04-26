<?php

namespace src\Behavioral\Strategy;

use src\Behavioral\Strategy\Enums\PaymentMethod;

class Checkout
{
    private PaymentStrategy $paymentStrategy;

    /**
     * @param PaymentStrategy $paymentStrategy
     */
    public function __construct(PaymentStrategy $paymentStrategy)
    {
        $this->paymentStrategy = $paymentStrategy;
    }

    public function processPayment($amount): void
    {
        $this->paymentStrategy->processPayment($amount);
    }
}