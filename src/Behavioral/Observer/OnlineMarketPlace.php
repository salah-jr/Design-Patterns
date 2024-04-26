<?php

namespace src\Behavioral\Observer;

class OnlineMarketPlace
{
    private $subscribers = [];
    private $products = [];
    private $offers = [];
    private $jobs = [];

    /**
     * @param array $subscribers
     * @param array $products
     * @param array $offers
     * @param array $jobs
     */
    public function __construct()
    {
        $this->subscribers = [];
        $this->products = [];
        $this->offers = [];
        $this->jobs = [];
        $this->initSubscriberEvents();
    }


    private function initSubscriberEvents(): void
    {
        $this->subscribers[EventType::NEW_PRODUCT->name] = [];
        $this->subscribers[EventType::NEW_OFFER->name] = [];
        $this->subscribers[EventType::JOB_OPENING->name] = [];
    }

    public function subscribe(EventType $eventType, Subscriber $subscriber) {
        $this->subscribers[$eventType->name][] = $subscriber;
    }

    public function unSubscribe(EventType $eventType, Subscriber $subscriber)
    {
        foreach ($this->subscribers[$eventType->name] as $key => $value) {
            if ($subscriber->getName() === $value->getName()) {
                unset($this->subscribers[$eventType->name][$key]);
                break;
            }
        }
    }

    public function addNewProduct(Product $product) {
        $this->products[] = $product;
        $this->notifySubscribers(EventType::NEW_PRODUCT, "New Product Added: " . $product->getName());
    }

    public function addNewOffer(Offer $offer) {
        $this->offers[] = $offer;
        $this->notifySubscribers(EventType::NEW_OFFER, 'New Offer Added: ' . $offer->getMessage());
    }

    public function addNewJob($jobTitle) {
        $this->notifySubscribers(EventType::JOB_OPENING, 'New Opening Position Is Available: ' . $jobTitle);
    }

    public function notifySubscribers(EventType $eventType, $message): void
    {
        foreach ($this->subscribers[$eventType->name] as $subscriber) {
            $subscriber->notify($message);
        }
    }

}