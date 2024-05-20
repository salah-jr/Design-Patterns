<?php

namespace src\Behavioral\TemplateMethod;

use src\Behavioral\TemplateMethod\Helpers\Data;
use src\Behavioral\TemplateMethod\Helpers\File;

class ImageCvReportGeneration extends CvReportGeneration
{

    function extractData(File $file): Data
    {
        print_r('Extracting data from Image file'. "\n");

        return new Data();
    }
}