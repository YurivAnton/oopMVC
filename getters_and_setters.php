<?php
class Employee{
    private $name;
    private $age;
    private $salary;

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        if($this->isAgeCorrect($age)) {
            $this->age = $age;
        }
    }

    public function getSalary() {
        return $this->salary . '$';
    }

    public function setSalary($salary) {
        $this->salary = $salary;
    }

    private function isAgeCorrect($age) {
        return $age > 1 && $age < 100;
    }
}

$emplAnt = new Employee();
$emplAnt->setName('Anton');
$emplAnt->setAge(35);
$emplAnt->setAge(99);
$emplAnt->setSalary(2500);
echo $emplAnt->getName() . ' ' .$emplAnt->getAge() . ' ' .$emplAnt->getSalary();
