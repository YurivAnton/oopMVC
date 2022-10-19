<?php
class Employee extends User
{
    /* 
    //
    private $salary;

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    } */

    //22
    private $salary;

    public function __construct($name, $surname, $birthday, $salary) {
        parent::__construct($name, $surname, $birthday);
        $this->salary = $salary;
    }

    public function getSalary() {
        return $this->salary;
    }
}