<?php
require_once 'Classes/User.php';
require_once 'Classes/Employee.php';
require_once 'Classes/Student.php';
require_once 'Classes/Programmer.php';
require_once 'Classes/Driver.php';

$employee = new Employee;
	
$employee->setSalary(1000);
$employee->setName('john');
$employee->setAge(25);

echo $employee->getSalary();
echo $employee->getName();
echo $employee->getAge();

echo '<br>';

$student = new Student('asd');
	
$student->setCourse(3);
$student->setName('john');
$student->setAge(25);

echo $student->getCourse();
echo $student->getName();
echo $student->getAge();

echo '<br>';

$programmer = new Programmer();

$programmer->setName('Ant');
$programmer->setAge(35);
$programmer->setSalary(2500);
$programmer->setLang(['php', 'html']);
$programmer->setLang('java');

echo $programmer->getName();
echo $programmer->getAge();
echo $programmer->getSalary();
echo $programmer->getLang();

echo '<br>';

$driver = new Driver();
$driver->setName('Anton');
$driver->setAge(39);
$driver->setSalary(5500);
$driver->setCategory('B, C');

echo $driver->getName();
echo $driver->getAge();
echo $driver->getSalary();
echo $driver->getCategory();