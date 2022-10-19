<?php
require_once 'Classes/User.php';
require_once 'Classes/Employee.php';

$user = new User('anton', 24, '1986-07-03');
echo $user->getAge();
echo '<br>';

$employee = new Employee('antonasdf', 24, '1986-07-03', 2500);
echo $employee->getSalary() . ' ' . $employee->getName();