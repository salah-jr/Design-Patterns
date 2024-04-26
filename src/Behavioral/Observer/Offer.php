<?php

namespace src\Behavioral\Observer;

class Offer
{
    private $message;

    /**
     * @param $message
     */
    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }


}