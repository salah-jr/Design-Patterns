<?php

use src\Behavioral\TemplateMethod\ImageCvReportGeneration;
use src\Behavioral\TemplateMethod\PdfCvReportGeneration;
use src\Behavioral\TemplateMethod\WordCvReportGeneration;

require_once __DIR__.'/../../../vendor/autoload.php';

$pdfCvReportGeneration = new PdfCvReportGeneration();
$report = $pdfCvReportGeneration->generateCvReport('/tmp/cv-1.pdf');
$pdfGeneratedReport = $report->getIsPassed();

$wordCvReportGeneration = new WordCvReportGeneration();
$report = $wordCvReportGeneration->generateCvReport('/tmp/cv-1.docx');
$wordGeneratedReport = $report->getIsPassed();

$imageCvReportGeneration = new ImageCvReportGeneration();
$report = $imageCvReportGeneration->generateCvReport('/tmp/cv-1.jpg');
$imageGeneratedReport = $report->getIsPassed();
