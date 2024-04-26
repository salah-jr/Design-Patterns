<?php
require_once __DIR__.'/../../../vendor/autoload.php';

use src\Behavioral\Observer\Customer;
use src\Behavioral\Observer\Enums\EventType;
use src\Behavioral\Observer\JobFinder;
use src\Behavioral\Observer\Offer;
use src\Behavioral\Observer\OnlineMarketPlace;
use src\Behavioral\Observer\Product;

$onlineMarketPlace = new OnlineMarketPlace();

$onlineMarketPlace->subscribe(EventType::NEW_PRODUCT, new Customer("Mohammed"));
$onlineMarketPlace->subscribe(EventType::NEW_PRODUCT, new Customer("Ali"));
$onlineMarketPlace->subscribe(EventType::NEW_OFFER, new Customer("Ziad"));
$onlineMarketPlace->unSubscribe(EventType::NEW_PRODUCT, new Customer('Mohammed'));
$onlineMarketPlace->subscribe(EventType::JOB_OPENING, new JobFinder('Mostafa'));


$onlineMarketPlace->addNewProduct(new Product("Mobile", 1000.0));
$onlineMarketPlace->addNewOffer(new Offer("50% discount for every item"));
$onlineMarketPlace->addNewJob("Data Engineer");
