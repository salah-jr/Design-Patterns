<?php

use src\Behavioral\Strategy\BankTransferPaymentStrategy;
use src\Behavioral\Strategy\Checkout;
use src\Behavioral\Strategy\Enums\MembershipType;
use src\Behavioral\Strategy\Enums\PaymentMethod;
use src\Behavioral\Strategy\GoldPricingStrategy;
use src\Behavioral\Strategy\PaypalPaymentStrategy;
use src\Behavioral\Strategy\PremiumPricingStrategy;
use src\Behavioral\Strategy\Product;
use src\Behavioral\Strategy\RegularPricingStrategy;
use src\Behavioral\Strategy\VisaCardPaymentStrategy;

require_once __DIR__.'/../../../vendor/autoload.php';


$wallet = new Product("Wallet", 200.0, new RegularPricingStrategy());
$walletPrice = $wallet->calculatePrice();

$jacket = new Product('Jacket', 400.0, new GoldPricingStrategy());
$jacketPrice = $jacket->calculatePrice();

$mobile = new Product('Mobile', 800.0, new PremiumPricingStrategy());
$mobilePrice = $mobile->calculatePrice();


$checkout = new Checkout(new VisaCardPaymentStrategy());
$checkout->processPayment($walletPrice);

$checkout = new Checkout(new PaypalPaymentStrategy());
$checkout->processPayment($jacketPrice);

$checkout = new Checkout(new BankTransferPaymentStrategy());
$checkout->processPayment($mobilePrice);
