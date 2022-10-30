<?php
//38
class User implements iUser {
	private $name;
	private $age;

	public function setName($name) {
		$this->name = $name;
	}

	public function getName() {
		return $this->name;
	}

	public function setAge($age) {
		$this->age = $age;
	}

	public function getAge() {
		return $this->age;
	}
}

/*
class User
{
  	private $name;
	private $age;

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
        if(strlen($name) > 3) {
            $this->name = $name;
        }
	}

	public function getAge()
	{
		return $this->age;
	}

	public function setAge($age)
	{
		if ($age >= 18) {
			$this->age = $age;
		}
    } 
 */
/*
	private $name;
	private $surname;
	private $birthday;
	private $age;

	public function __construct($name, $surname, $birthday) {
		$this->name = $name;
		$this->surname = $surname;
		$this->birthday = date('Y-m-d', strtotime($birthday));
		$this->age = self::calculateAge($birthday);
	}

	public function getName() {
		return $this->name;
	}

	public function getSurname() {
		return $this->surname;
	}

	public function getBirthday() {
		return $this->birthday;
	}

	public function getAge() {
		return $this->age;
	}

	private function calculateAge($birthday) {
		$today = date('Y-m-d');
		$diff = abs(strtotime($today) - strtotime($birthday));
		$age = floor($diff / (365*60*60*24));
		return $age;
	}
}
 */
//35
/* abstract class User{
    private $name;

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    abstract public function increaseRevenue($value);

	abstract public function decreaseRevenue($value);
} */

