<?php

use src\Behavioral\Iterator\EmployeeHierarchyCollection;

require_once __DIR__.'/../../../vendor/autoload.php';


$employeeHirearcheyCollection = new EmployeeHierarchyCollection(123);

$iterator = $employeeHirearcheyCollection->createEmployeeDirectReportIterator();

while ($iterator->hasNext()) {
    print_r($iterator->getNext()->getName() . "\n");
}