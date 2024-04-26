<?php

namespace src\Behavioral\Observer;

class Customer implements Subscriber
{
    private $name;

    /**
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    public function notify($message): void
    {
        print_r("Notifying user: " . $this->getName() . " about: " . $message . "\n");
    }
}