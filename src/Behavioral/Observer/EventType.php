<?php

namespace src\Behavioral\Observer;

enum EventType
{
    case NEW_PRODUCT;
    case NEW_OFFER;
    case JOB_OPENING;
}