<?php
class Employee{
    private $name;
    private $surname;
    private $salary;

    public function __construct($name, $surname, $salary) {
        $this->name = $name;
        $this->surname = $surname;
        $this->salary = $salary;
    }

    public function getName() {
        return $this->name;
    }

    public function getSurname() {
        return $this->surname;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function setSalary($salary) {
        $this->salary = $salary;
    }
}

$emplAnt = new Employee('Anton', 35, 2500);
echo $emplAnt->getName() . ' ' . $emplAnt->getSurname() . ' ' . $emplAnt->getSalary();
$emplAnt->setSalary(3000);
echo ' new salary is ' . $emplAnt->getSalary();
