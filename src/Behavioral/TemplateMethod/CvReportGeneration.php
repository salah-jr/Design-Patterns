<?php

namespace src\Behavioral\TemplateMethod;

use src\Behavioral\TemplateMethod\Helpers\AnalyzedData;
use src\Behavioral\TemplateMethod\Helpers\Data;
use src\Behavioral\TemplateMethod\Helpers\File;
use src\Behavioral\TemplateMethod\Helpers\GeneratedReport;

abstract class CvReportGeneration
{
    protected abstract function extractData(File $file): Data;

    public function generateCvReport($cvFilePath): GeneratedReport
    {
        $file = $this->readFile($cvFilePath);
        $extractedData = $this->extractData($file);
        $analyzedData = $this->analyzeData($extractedData);

        return $this->generateReportOf($analyzedData);
    }

    private function generateReportOf($analyzedData): GeneratedReport
    {
        print_r('Generating report data from: '. "\n \n");

        return new GeneratedReport(true);
    }

    private function readFile($filePath): File
    {
        print_r('Reading file from: '. "\n");

        return new File();
    }

    private function analyzeData(Data $data): AnalyzedData
    {
        print_r('Analyzing data from: '. "\n");

        return new AnalyzedData();
    }
}