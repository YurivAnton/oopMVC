<?php
class Employee{
    public $name;
    public $age;
    public $salary;

    public function getName() {
        return $this->name;
    }
    
    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        if($age >= 18) {
            $this->age = $age;
        }
    }

    public function getSalary() {
        return $this->salary;
    }

    public function checkAge() {
        if($this->getAge >= 18) {
            return true;
        } else {
            return false;
        }
    }

    public function doubleSalary() {
        return $this->salary * 2;
    }
}

$employee1 = new Employee();
$employee1->name = 'Ant';
$employee1->age = 25;
$employee1->salary = 1000;

$employee2 = new Employee;
$employee2->name = 'ton';
$employee2->age = 30;
$employee2->salary = 2000;

echo $employee1->getSalary() + $employee2->getSalary();
echo '<br>';

$employee3 = new Employee();
$employee3->name = 'aaa';
$employee3->age = 3000;
$employee3->salary = 2500;
$employee3->setAge(30);

echo $employee3->getAge();
echo '<br>';
echo $employee3->doubleSalary();

class Rectangle{
    public $width;
    public $heigh;

    public function getSquare() {
        return $this->width * $this->heigh;
    }

    public function getPerimeter() {
        return 2 * $this->width + 2 * $this->heigh;
    }
}

$rectangle = new Rectangle();
$rectangle->width = 2;
$rectangle->heigh = 3;

echo '<br>';
echo $rectangle->getSquare();
echo '<br>';
echo $rectangle->getPerimeter();

class User{
    public $name;
    public $age;

    private function isAgeCorrect($age) {
        if($age >= 18 && $age <60) {
            return true;
        } else {
            return false;
        }
    }

    public function setAge($age) {
        if($this->isAgeCorrect($age)) {
            $this->age = $age;
        }
    }

    public function addAge($years) {
        $newAge = $this->age + $years;
        if($this->isAgeCorrect($newAge)) {
            $this->age = $newAge;
        }
    }

    public function subAge($years) {
        $newAge = $this->age - $years;
        if($this->isAgeCorrect($newAge)) {
            $this->age = $newAge;
        }
    }
}
$user = new User();
$user->name = 'ant';
$user->setAge(25);
echo '<br>';
echo $user->age;
$user->addAge(10);
echo ' - ' . $user->age;
$user->subAge(5);
echo ' - ' . $user->age;

class Student{
    public $name;
    public $course;

    public function transferToNextCourse() {
        $newCourse = $this->course + 1;
        if($this->isCourseCorrect($newCourse)) {
            $this->course = $newCourse;
        }
    }

    private function isCourseCorrect($course) {
        return $course <= 5;
    }
}

$student = new Student();
$student->name = 'ant';
$student->course = 66;
echo '<br>';
echo $student->name . ' ' . $student->course;
$student->transferToNextCourse();
echo ' - ' . $student->course;
