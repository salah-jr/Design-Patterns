<?php

namespace src\Behavioral\Strategy;

interface PricingStrategy
{
    public function calculatePrice($price);
}