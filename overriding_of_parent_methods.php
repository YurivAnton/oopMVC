<?php
require_once 'Classes/User.php';
require_once 'Classes/Student.php';

$student = new Student();
$student->setName('Anton');
$student->setAge(25);

echo $student->getName();
echo $student->getAge();
