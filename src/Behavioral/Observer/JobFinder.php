<?php

namespace src\Behavioral\Observer;

class JobFinder implements Subscriber
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
        print_r( $this->getName() . " is receiving a notification about job finding: " . $message . "\n");
    }
}