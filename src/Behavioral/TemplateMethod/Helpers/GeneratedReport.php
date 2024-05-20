<?php

namespace src\Behavioral\TemplateMethod\Helpers;

class GeneratedReport
{
    private $isPassed;

    public function __construct($isPassed)
    {
        $this->isPassed = $isPassed;
    }

    /**
     * @return mixed
     */
    public function getIsPassed()
    {
        return $this->isPassed;
    }



}