<?php
namespace App\Srp;

class SalaryPrinter
{
    public function printSalary(Employee $employee)
    {
        echo "{$employee->getName()} salary: {$employee->calculateSalary()}";
    }
}