<?php
namespace App\Srp;

class Employee
{
    private $name;
    private $salary;

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName()
    {
        return $this->name;
    }

    public function calculateSalary(){
        return $this->salary * 1.1; //Aumento del 10%
    }
}