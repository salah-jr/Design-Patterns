<?php

namespace src\Behavioral\Strategy;

interface PaymentStrategy
{
    public function processPayment($amount);
}