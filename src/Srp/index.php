<?php


require_once __DIR__.'/../../vendor/autoload.php';

use App\Srp\Employee;
use App\Srp\SalaryPrinter;

$employee = new Employee('John', 2000);
$printer = new SalaryPrinter();
$printer->printSalary($employee);