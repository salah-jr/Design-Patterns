<?php

namespace src\Behavioral\Strategy;

class GoldPricingStrategy implements PricingStrategy
{
    public function calculatePrice($price): float
    {
        return $price * 0.9; // 10% discount
    }
}