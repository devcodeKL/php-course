<?php

class Building {

	// public access modifiers: fully open, property and methods can be accessed from anywhere
    // public $name;
    // public $floors;
    // public $address;

	// private access modifier: method and property methods can only be accessed within the class
    // private $name;
    // private $floors;
    // private $address;

	// protected access modifier: property or method is only accessible within the class and child class
    protected $name;
    protected $floors;
    protected $address;

    public function __construct($name, $floors, $address) {
        $this->name = $name;
        $this->floors = $floors;
        $this->address = $address;
    }

	// "Encapsulation" indicated that data should not be directly accessible to users but through setter and getter functions.
    	// These functions act as intermediaries for accessing and modifying object properties.
    	// They determine whether an object's property can be accessed or changed.
    	// These functions are known as getters (accessors) and setters (mutators) and are essential for encapsulating object's data.

    // getter (accessors): used to retrieve the value of a property.
	public function getName(){
		return $this->name;
	}

	public function getFloors(){
		return $this->floors;
	}

	public function getAddress(){
		return $this->address;
	}

	// setter (mutators): used to modify the value of a property.
	public function setName($name){
		$this->name = $name;
	}

	protected function setFloors($floors){
		$this->floors = $floors;
	}

	public function setFloorsExternally($floors){
		$this->setFloors($floors);
	}

	private function setAddress($address){
		$this->address = $address;
	}

	public function printName(){
		return "The name of the building is $this->name";
	}

}

class Condominium extends Building {

}

$building = new Building('Caswynn Building', 8, 'Timog Avenue, Quezon City, Philippines');
$condominium = new Condominium('Enzo Condo', 5, 'Buendia Avenue, Makati City, Philippines');



?>