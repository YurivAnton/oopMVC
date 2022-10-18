<?php
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
}

