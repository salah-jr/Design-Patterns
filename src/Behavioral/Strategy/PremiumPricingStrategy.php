<?php

namespace src\Behavioral\Strategy;

class PremiumPricingStrategy implements PricingStrategy
{

    public function calculatePrice($price): float
    {
        return $price * 0.8; // 20% discount

    }
}