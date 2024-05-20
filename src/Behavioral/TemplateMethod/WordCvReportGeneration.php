<?php

namespace src\Behavioral\TemplateMethod;

use src\Behavioral\TemplateMethod\Helpers\Data;
use src\Behavioral\TemplateMethod\Helpers\File;

class WordCvReportGeneration extends CvReportGeneration
{
    function extractData(File $file): Data
    {
        print_r('Extracting data from Word file'. "\n");

        return new Data();
    }
}