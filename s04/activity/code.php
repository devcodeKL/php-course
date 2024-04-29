<?php

class Person{
    protected $name;
    protected $age;
    protected $address;

    public function __construct($name, $age, $address){
        $this->setName($name);
        $this->setAge($age);
        $this->setAddress($address);
    }

    public function getName(){
        return $this->name;
    }

    public function getAge(){
        return $this->age;
    }

    public function getAddress(){
        return $this->address;
    }

    public function setName($name){
    	if (is_string($name)){
        	$this->name = $name;
        } else {
            return "Invalid value provided";
        }
    }

    public function setAge($age){
    	if (is_int($age) && $age > 0){
        	$this->age = $age;
	    } else {
	        return "Invalid value provided";
	    }
	}

    public function setAddress($address){
    	if (is_string($address)){
        	$this->address = $address;
	    } else {
            return "Invalid value provided";
		}
	}
}

class Student extends Person{
    protected $studentId;

    public function getStudentId(){
        return $this->studentId;
    }

    public function setStudentId($studentId){
    	if (is_string($studentId)){
        	$this->studentId = $studentId;
	    } else {
            return "Invalid value provided";
        }
	}
}

class Employee extends Person{
    protected $team;
    protected $role;

    public function getTeam(){
        return $this->team;
    }

    public function getRole(){
        return $this->role;
    }

    public function setTeam($team){
        if (is_string($team) && !empty($team)){	
        	$this->team = $team;
    	} else {
            return "Invalid value provided";
        }
    }

    public function setRole($role){
    	if (is_string($role) && !empty($role)){
        	$this->role = $role;
    	} else {
            return "Invalid value provided";
        }
    }
}

$person = new Person('John Smith', 30, 'Quezon City, Metro Manila');
$student = new Student('Jane Doe', 20, 'Makati City, Metro Manila');
$employee = new Employee('Mark Blain', 35, 'Pasig City, Metro Manila');

?>