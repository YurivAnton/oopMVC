<?php
class Employee{
    public $name;
    public $age;
    public $salary;

    public function __construct($name, $age, $salary) {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
}

$employeeEric = new Employee('Eric', 25, 1000);
$employeeKyle = new Employee('Kyle', 30, 2000);
echo '<br>';
echo $employeeEric->salary + $employeeKyle->salary;
