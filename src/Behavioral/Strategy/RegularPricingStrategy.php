<?php

namespace src\Behavioral\Strategy;

class RegularPricingStrategy implements PricingStrategy
{
    public function calculatePrice($price): float
    {
        return $price;
    }
}