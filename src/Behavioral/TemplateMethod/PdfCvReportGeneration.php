<?php

namespace src\Behavioral\TemplateMethod;

use src\Behavioral\TemplateMethod\Helpers\Data;
use src\Behavioral\TemplateMethod\Helpers\File;

class PdfCvReportGeneration extends CvReportGeneration
{
    function extractData(File $file): Data
    {
        print_r('Extracting data from pdf file '. "\n");

        return new Data();
    }
}