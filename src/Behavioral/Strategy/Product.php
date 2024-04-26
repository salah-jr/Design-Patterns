<?php

namespace src\Behavioral\Strategy;

use src\Behavioral\Strategy\Enums\MembershipType;

class Product
{
    private $name;
    private $price;
    private PricingStrategy $pricingStrategy;

    /**
     * @param $name
     * @param $price
     */
    public function __construct($name, $price, $pricingStrategy)
    {
        $this->name = $name;
        $this->price = $price;
        $this->pricingStrategy = $pricingStrategy;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    public function calculatePrice()
    {
        return $this->pricingStrategy->calculatePrice($this->price);
    }

}