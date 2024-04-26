<?php

namespace src\Behavioral\Observer;

interface Subscriber
{
    public function notify ($message);
}